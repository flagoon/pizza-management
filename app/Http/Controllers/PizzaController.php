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
        $pizza = new Pizza();
        $pizza->pizza_name = $request->pizza_name;
        $pizza->pizza_description = $request->pizza_description;
        $pizza->pizza_spiciness = $request->pizza_spiciness;
        $pizza->category_id = $request->pizza_category;
        $pizza->save();

        /**
         * sending table to attach relation to pivot.
         */
        $pizza
            ->ingredients()
            ->attach($request->all()['ingredients']);

        /**
         * Sening prices to pivot. There is a price in pivot tablel, so we need to attach value to proper key.
         *
         * @var int $key
         * @var number $price
         */
        foreach ($request->all()['pizza_price'] as $key => $price) {
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
        return view('pizza.pizzaEdit', [
            'pizza' => $pizza,
            'ingredients' => Ingredient::all(),
            'categories' => Category::all()
            ]);
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
        $pizza->update([
            'pizza_name' => $request->pizza_name,
            'pizza_description' => $request->pizza_description,
            'pizza_spiciness' => $request->pizza_spiciness,
            'category_id' => $request->pizza_category
        ]);

        /**
         * As we have pivot with value, we have to sync like this. All prices are required, so we are using syncWithoutDetaching.
         *
         * @var int $key
         * @var number $price
         */
        foreach ($request->all()['pizza_price'] as $key => $price) {
            $pizza
                ->pizzaSizes()
                ->syncWithoutDetaching([
                    $key => [
                        'pizza_size_price' => $price
                    ]
                ]);
        }

        /**
         * we are sending a table of ingredients' ids to sync in pivot.
         */
        $pizza
            ->ingredients()
            ->sync($request->all()['ingredients']);

        return redirect()
            ->route('pizza.index')
            ->with('success', 'Pizza ' . $pizza->pizza_name . ' was modify!');
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
