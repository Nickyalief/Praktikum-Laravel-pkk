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

    public function about(){
        return view('page.about');
    }

    public function contact(){
        return view('page.contact');
    }

    public function menu(){
        return view('page.menu');
    }


    public function product(){
        $products = Jual::all(); // Menggunakan model Jual
        return view('page.product', compact('products'));
    }

    public function ship(){
        $cart = session()->get('cart', []);
        $cartTotal = $this->calculateCartTotal($cart);
    
        return view('page.ship', compact('cart', 'cartTotal'));
    }
    
    private function calculateCartTotal($cart)
    {
        $total = 0;
    
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }
    
        return $total;
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

        foreach ($cart as $productId => $cartItem) {
            $this->storeOrder($productId, $cartItem['quantity']);
        }

        session()->forget('cart');

        return redirect()->route('ship')->with('success', 'Checkout successful');
    }
    
    private function storeOrder($productId, $quantity) {
        $product = Jual::findOrFail($productId);

        $order = new Order([
            'product_id' => $productId,
            'quantity' => $quantity,
        ]);

        $order->save();

        // Add logic to update stock or perform other actions if needed
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
        
public function placeOrder(Request $request)
{
    // Retrieve necessary data from the request or session
    $cart = session()->get('cart', []);
    $cartTotal = $this->calculateCartTotal($cart);

    // Perform any additional logic for order placement
    // ...

    // Clear the cart after placing the order
    session()->forget('cart');

    // Redirect to a thank you or order confirmation page
    return view('page.order_confirmation', compact('cartTotal'));
}



}
