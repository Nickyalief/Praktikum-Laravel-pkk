<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    public $timestamps = false; // Add this line to disable timestamps
    protected $fillable = ['product_name', 'price', 'quantity'];
}
