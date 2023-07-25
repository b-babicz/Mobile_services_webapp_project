<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'user_id' => 'required',
        'order_date' => 'required|date',
        'payment_end_date' => 'required|date',
        'payment_method' => 'required',
        'offer_id' => 'required',
    ]);

    $order = Order::create($validatedData);

    return redirect()->route('orders.index');
}

    public function edit(Order $order)
    {
        return view('orders.edit', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'order_date' => 'required|date',
            'payment_end_date' => 'required|date',
            'payment_method' => 'required',
            'offer_id' => 'required',
        ]);

        $order->update($validatedData);

        return redirect()->route('orders.index');
    }


    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index');
    }
}
