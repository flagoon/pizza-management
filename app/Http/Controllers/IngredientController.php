<?php

namespace App\Http\Controllers;

use App\Model\Ingredient;
use App\Model\PizzaSize;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    /**
     * Display a listing of the ingredients.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ingredients.ingredientList', [
            'ingredients' => Ingredient::all(),
            'sizes' => PizzaSize::all()
        ]);
    }

    /**
     * Show the form for creating a new ingredient.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ingredients.ingredientCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // TODO: change to IngredientRequest
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Ingredient  $ingredient
     * @return \App\Model\Ingredient  $ingredient
     */
    public function show(Ingredient $ingredient)
    {
        return $ingredient;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingredient $ingredient)
    {
        return view('ingredients.ingredientEdit', [ 'ingredient' => $ingredient ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingredient $ingredient)
    {
        // TODO: Change to IngredientRequest
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingredient $ingredient)
    {
        // TODO: destroying ingredient should destroy all instances in Pivot.
    }
}
