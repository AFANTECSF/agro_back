<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create()
    {
        return view('pages.orders.form');
    }

//    public function update(Request $request, $id)
//    {
//        $order = Order::find($id);
//        $order->update($request->all());
//
//        return redirect()->route('orders.index');
//    }
}
