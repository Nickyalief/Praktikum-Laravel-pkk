<?php

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function store(Request $request, $productId)
    {
        $product = Jual::findOrFail($productId);

        $order = new Order([
            'product_id' => $productId,
            'quantity' => $request->input('quantity'),
        ]);

        $order->save();

        // Add logic to update stock or perform other actions if needed

        return redirect()->route('orders.index')->with('success', 'Order placed successfully');
    }

    // Add other CRUD methods (show, edit, update, destroy) as needed
}