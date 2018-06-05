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
        return view('ingredients.ingredientCreate', [ 'pizzaSizes' => PizzaSize::all() ]);
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

        /**
         * This loop is inserting data to pivot table with prices.
         * Field name can't be a number, so we are using SIZE_PREFIX in blade
         * files and then remove it here.
         *
         * @var integer $ingredientPrice
         * @var string $key
         */
        foreach ($ingredientPrices as $key => $ingredientPrice) {
            $ingredientPriceId = str_replace('size_', '', $key);
            $ingredient
                ->pizzaSizes()
                ->attach($ingredientPriceId, [
                    'ingredient_size_price' =>$ingredientPrice
                ]);
        }

        return redirect()
            ->route('ingredients.index')
            ->with('success', 'Ingredient was created correctly.');
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
        // TODO: it could be an array, not multiple request position. REDO!!
        $pizzaSizePrices = $request->except([
            '_token', '_method', 'ingredient_name', 'ingredient_description', 'id'
        ]);

        $ingredient->update([
            'ingredient_name' => $request->ingredient_name,
            'ingredient_description' => $request->ingredient_description
        ]);

        /**
         * When modifying ingredient, it's new prices should change in pivot
         *
         * @var string $key
         * @var integer $pizzaSizePrice
         */
        foreach ($pizzaSizePrices as $key => $pizzaSizePrice) {
            $pizzaSizeKey = str_replace('size_', '', $key);
            $ingredient
                ->pizzaSizes()
                ->syncWithoutDetaching([
                    $pizzaSizeKey => ['ingredient_size_price' => $pizzaSizePrice]
                ]);
        }

        return redirect()
            ->route('ingredients.index')
            ->with('success', 'Ingredient was updated correctly.');
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
        } catch (\Exception $exception) {
            return view('ingredients.ingredientList')
                ->withErrors(['errors.delete' => 'Something went wrong!']);
        }

        return redirect()
            ->route('ingredients.index')
            ->with('success', 'Ingredient was deleted correctly.');
    }
}
