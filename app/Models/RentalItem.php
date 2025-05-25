<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RentalItem extends Model
{
    protected $table = 'rental_items';
    protected $fillable = ['rental_id', 'item_id', 'quantity', 'price_per_day'];
}
