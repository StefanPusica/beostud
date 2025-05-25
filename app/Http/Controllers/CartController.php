<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class CartController extends Controller
{
    // @desc Display cart items
    // @route GET /cart
    public function index()
    {
        $cart = session('cart', []);

        // Uzimamo sve item-e po ID-jevima iz sesije
        $items = Item::findMany(array_keys($cart));

        // Povezujemo item-e sa količinama
        $itemsWithQuantities = $items->map(function ($item) use ($cart) {
            $item->quantity_in_cart = $cart[$item->id];
            $item->total_price = $item->price_per_day * $item->quantity_in_cart;
            return $item;
        });

        return view('pages.cart.index', compact('itemsWithQuantities'));
    }

    // @desc Add item to cart
    // @route POST /cart/add
    public function add(Request $request)
    {
        $itemId = $request->input('item_id');
        $quantity = (int) $request->input('quantity', 1);

        $cart = session()->get('cart', []);

        if (isset($cart[$itemId])) {
            $cart[$itemId] += $quantity;
        } else {
            $cart[$itemId] = $quantity;
        }

        session()->put('cart', $cart);

        // Ovo je ključno:
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'cart_count' => array_sum($cart)
            ]);
        }

        // Fallback ako nije ajax
        return redirect()->back()->with('success', 'Proizvod dodat u korpu!');
    }

    // @desc Remove item from cart
    // @route POST /cart/remove
    public function remove(Request $request) {
        $itemId = $request->input('item_id');

        $cart = session()->get('cart', []);
        unset($cart[$itemId]);
        session()->put('cart', $cart);

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'cart_count' => array_sum($cart)
            ]);
        }

        return redirect()->back();
    }
}
