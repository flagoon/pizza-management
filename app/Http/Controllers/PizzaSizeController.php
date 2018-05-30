<?php

namespace App\Http\Controllers;

use App\Model\PizzaSize;
use Illuminate\Http\Request;

class PizzaSizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pizza-size.pizza-sizeList', [ 'pizzaSizes' => PizzaSize::all() ]);
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\PizzaSize  $pizzaSize
     * @return \Illuminate\Http\Response
     */
    public function show(PizzaSize $pizzaSize)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\PizzaSize  $pizzaSize
     * @return \Illuminate\Http\Response
     */
    public function edit(PizzaSize $pizzaSize)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\PizzaSize  $pizzaSize
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PizzaSize $pizzaSize)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\PizzaSize  $pizzaSize
     * @return \Illuminate\Http\Response
     */
    public function destroy(PizzaSize $pizzaSize)
    {
        //
    }
}
