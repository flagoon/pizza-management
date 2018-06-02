<?php

namespace App\Http\Controllers;

use App\Http\Requests\PizzaRequest;
use App\Model\Pizza;
use App\Model\PizzaSize;

class PizzaController extends Controller
{
    /**
     * Display a listing of the pizza.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pizza.pizzaList', [
            'pizzas' => Pizza::all(),
            // TODO: it can be removed using relation pizzas_pizza_sizes
            'pizzaSizes' => PizzaSize::all()
        ]);
    }

    /**
     * Show the form for creating a new pizza.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created pizza in storage.
     *
     * @param  \App\Http\Requests\PizzaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PizzaRequest $request)
    {
        //
    }

    /**
     * Display the specified pizza.
     *
     * @param  \App\Model\Pizza  $pizza
     * @return Pizza $pizza
     */
    public function show(Pizza $pizza)
    {
        //
    }

    /**
     * Show the form for editing the specified pizza.
     *
     * @param  \App\Model\Pizza  $pizza
     * @return \Illuminate\Http\Response
     */
    public function edit(Pizza $pizza)
    {
        //
    }

    /**
     * Update the specified pizza in storage.
     *
     * @param  \App\Http\Requests\PizzaRequest  $request
     * @param  \App\Model\Pizza  $pizza
     * @return \Illuminate\Http\Response
     */
    public function update(PizzaRequest $request, Pizza $pizza)
    {
        //
    }

    /**
     * Remove the specified pizza from storage.
     *
     * @param  \App\Model\Pizza  $pizza
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pizza $pizza)
    {
        //
    }
}
