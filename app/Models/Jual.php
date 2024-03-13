<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jual extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'amount', // asumsi 'amount' ada dalam database Anda, jika tidak hapus baris ini
        'images',
    ];
    
}
