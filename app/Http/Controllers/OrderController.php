<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $order = Order::all();
        return view('cart.order',['id'=>$id])->with('order', $order);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,$id)
    {
        $pd = Product::all();
            $check = Order::where('product_id',$id)->get();
        if (count($check)>0) {
            $order = Order::where('product_id',$id)->first();
            $money = $order->price;
            $quantity = $order->qty;
            $order->qty=$quantity+1;
            $order->total = $quantity * $money;
            $order->save();
            $ord_user = Order::where('user_id',1)->get();

            return view('cart.order',['id'=>1])->with('order',$ord_user)->with('product',$pd);
        }
        $ord = new Order();
        $product = Product::find($id);
        $ord->product_id = $id;
        $ord->user_id = 1;
        $ord->qty = 1;
        $ord->price = $product->price;
        $ord->total = $product->price;
        $ord->save();
        $ord_tt = Order::where('user_id',1)->get();

        return view('cart.order',['id'=>1])->with('order',$ord_tt)->with('product',$pd);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
