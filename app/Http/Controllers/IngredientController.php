<?php

namespace App\Http\Controllers;

use App\Http\Requests\IngredientRequest;
use App\Model\Ingredient;
use App\Model\PizzaSize;

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
        $pizzaSizes = PizzaSize::all();
        return view('ingredients.ingredientCreate', [ 'pizzaSizes' => $pizzaSizes ]);
    }

    /**
     * Store a newly created ingredient in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IngredientRequest $request)
    {
        $ingredientPrices = $request->except([
            '_token', 'ingredient_name', 'ingredient_description'
        ]);
        $ingredient = new Ingredient();
        $ingredient->ingredient_name = $request->ingredient_name;
        $ingredient->ingredient_description = $request->ingredient_description;
        $ingredient->save();
        foreach($ingredientPrices as $ingredientPrice => $key) {
            $ingredientPriceId = str_replace('size_', '', $ingredientPrice);
            $ingredient->pizzaSizes()->attach($ingredientPriceId, [ 'ingredient_size_price' => $ingredientPrices[$ingredientPrice]]);
        }

        return redirect()->route('ingredients.index');
    }

    /**
     * Display the specified ingredient.
     *
     * @param  \App\Model\Ingredient  $ingredient
     * @return \App\Model\Ingredient  $ingredient
     */
    public function show(Ingredient $ingredient)
    {
        return $ingredient->pizzaSizes;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingredient $ingredient)
    {
        return view('ingredients.ingredientEdit', [
            'ingredient' => $ingredient,
            'pizzaSizes' => PizzaSize::all()
        ]);
    }

    /**
     * Update the specified ingredient in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function update(IngredientRequest $request, Ingredient $ingredient)
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
        $ingredient->pizzaSizes()->detach();

        try {
           $ingredient->delete();
        } catch(\Exception $exception) {
            return view('ingredients.ingredientList')
                ->withErrors(['errors.delete' => 'Something went wrong!']);
        }

        return redirect()->route('ingredients.index');
    }
}
