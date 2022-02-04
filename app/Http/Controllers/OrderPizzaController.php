<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Pizza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use mysql_xdevapi\Exception;

class OrderPizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store($order_id,$pizza_id,Request $request)
    {
        try {

            $order = Order::find($order_id);
            $pizza = Pizza::find($pizza_id);
            $qty = $request->input('qty');

            Order::find($order_id)->pizzas()->attach($pizza,['qty'=> $qty]);
            return redirect()->route('order.pizzas',['order'=>$order, 'pizzas'=>Pizza::all()])->with('success','Item is toegevoegd aan de winkelmand!');

        }
        catch ( \Exception $exception){

            return redirect()->route('order.pizzas',['order'=>$order, 'pizzas'=>Pizza::all()])->with('error','Er is iets mis, u hebt al de item toegevoegd. Pas uw items in de winkelmand aan!');

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('winkelmand', ['order'=>Order::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($pizzaid, $orderid)
    {
        Order::find($orderid)->pizzas()->detach($pizzaid);
        return view('winkelmand', ['order'=>Order::find($orderid)]);
    }
}
