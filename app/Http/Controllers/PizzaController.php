<?php

namespace App\Http\Controllers;

use App\Http\Requests\PizzaRequest;
use App\Model\Category;
use App\Model\Ingredient;
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
            'pizzas' => Pizza::all()
        ]);
    }

    /**
     * Show the form for creating a new pizza.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pizza.pizzaCreate', [
            'pizzaSizes' => PizzaSize::all(),
            'ingredients' => Ingredient::all(),
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created pizza in storage.
     *
     * @param  \App\Http\Requests\PizzaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PizzaRequest $request)
    {
        $ingredients = $request->all()['ingredients'];
        $prices = $request->all()['pizza_price'];

        $pizza = new Pizza();
        $pizza->pizza_name = $request->pizza_name;
        $pizza->pizza_description = $request->pizza_description;
        $pizza->pizza_spiciness = $request->pizza_spiciness;
        $pizza->category_id = $request->pizza_category;
        $pizza->save();

        foreach($ingredients as $ingredient) {
            $pizza
                ->ingredients()
                ->attach($ingredient);
        }

        foreach($prices as $key => $price) {
            $pizza
                ->pizzaSizes()
                ->attach($key, [
                    'pizza_size_price' => $price
                ]);
        }

        return redirect()
            ->route('pizza.index')
            ->with('success', 'New pizza added in ' . $pizza->category->category_name . ' category.');
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
        $pizza->ingredients()->detach();
        $pizza->pizzaSizes()->detach();

        try {
            $pizza->delete();
        } catch (\Exception $exception) {
            return view('ingredients.ingredientList')
                ->withErrors(['errors.delete' => 'Something went wrong!']);
        }

        return redirect()
            ->route('pizza.index')
            ->with('success', 'Pizza was deleted correctly.');
    }
}
