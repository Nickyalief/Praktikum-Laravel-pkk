<?php

namespace App\Http\Controllers;
use App\Models\CartItem;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        CartItem::create([
            'product_name' => $request->input('product_name'),
            'price' => $request->input('price'),
            'quantity' => $request->input('qty'),
        ]);

        return redirect()->back()->with('success', 'Item added to cart successfully!');
    }
}
