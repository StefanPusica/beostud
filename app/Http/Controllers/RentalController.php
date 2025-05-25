<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;

class RentalController extends Controller
{
    public function rental()
    {
        $categories = Category::all();
        return view('pages.rental.index')->with('categories', $categories);
    }

    // @desc Display a single rental category items
    // @route GET /rental/{$categorySlug}
    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        $subcategories = $category->subcategories;

        // Samo item-i bez podkategorije
        $items = $category->items()->whereNull('subcategory_id')->get();

        logger('→ Prikazujemo stranicu za kategoriju: ' . $category->name);
        logger('→ Broj podkategorija: ' . $subcategories->count());

        return view('pages.rental.show', [
            'category' => $category,
            'subcategories' => $subcategories,
            'items' => $items,
        ]);
    }

    // @desc Display a single rental subcategory items
    // @route GET /rental/{$subcategorySlug}
    public function subcategory($categorySlug, $subcategorySlug)
    {
        $subcategory = Subcategory::where('slug', $subcategorySlug)
        ->whereHas('category', fn ($q) => $q->where('slug', $categorySlug))
        ->firstOrFail();

        $items = $subcategory->items;

        return view('pages.rental.show-subcategory', compact('subcategory', 'items'));
    }
}
