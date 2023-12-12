<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Jual;
use Illuminate\Http\Request;
use Illuminate\Support\Js;

class Gointo extends Controller
{
    public function index(){
        return view('page.home');
    }

    public function product(){
        $products = Jual::all(); // Menggunakan model Jual
        return view('page.product', compact('products'));
    }

    public function ship(){
        
        $cart = Jual::all();
        // return $this->showCart();

        return view('page.ship', compact('cart'));
    }

    public function product1(){
        $juals = Jual::all();

        return view('product.product1', [
            'juals' => $juals,
        ]);
    }

    public function showCart(){
        $cart = session()->get('cart', []); // Menggunakan kunci 'cart'

        info('Cart Data:', ['cart' => $cart]);
        return view('page.ship', compact('cart'));
    }

    public function addProduct($id){
        $jual = Jual::findOrFail($id); // Use the Jual model
        $cart = session()->get('cart', []);
    
        if(isset($cart[$id])) {
            if(isset($cart[$id]['quantity'])){
                $cart[$id]['quantity']++;
            } else {
                $cart[$id]['quantity']=1;
            }
        } else {
            $cart[$id] = [
                'name' => $jual->title, // Update to the correct column name
                'price' => $jual->price,
                'image' => $jual->image,
                'quantity' => 1,
            ];
        }
    
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product telah berhasil ditambahkan ke basket'); // Fix the typo
    }

    public function checkout() {
        $cart = session()->get('cart', []);
    
        // Save the cart data to the database
        foreach ($cart as $productId => $cartItem) {
            $jual = Jual::findOrFail($productId);
            $jual->update(['quantity' => $cartItem['quantity']]);
        }
    
        // Clear the session cart
        session()->forget('cart');
    
        // Redirect to the ship page
        return redirect()->route('ship')->with('success', 'Checkout successful'); // Fix the typo
    }
    
    

    public function addAmount(Request $request) {
            $productId = $request->input('productId');
            $quantity = $request->input('quantity');
        
            $jual = Jual::findOrFail($productId);
            $cart = session()->get('cart', []);
        
            if(isset($cart[$productId])) {
                $cart[$productId]['quantity'] = $quantity;
                session()->put('cart', $cart);
        
                // Update the quantity in the database
                $jual->update(['quantity' => $quantity]);
        
                return redirect()->back()->with('Success', 'Quantity has been updated');
            }
        
            return redirect()->back()->with('Error', 'Product not found in the cart');
        }

        public function destroy(Request $request)
        {
            $cart = session()->get('cart', []);
        
            if ($request->id && isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
                session()->flash('Success', 'Product berhasil dihapus');
            } else {
                session()->flash('Error', 'Product tidak ditemukan di keranjang');
            }
        
            return redirect()->back();
        }
        

}
