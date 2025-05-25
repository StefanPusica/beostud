<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'category_id',
        'subcategory_id', // ← dodaj ovo!
        'name',
        'description',
        'quantity',
        'price_per_day',
        'image_path'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function rentals()
    {
        return $this->belongsToMany(Rental::class, 'rental_items')
                    ->withPivot('quantity', 'price_per_day')
                    ->withTimestamps();
    }
}
