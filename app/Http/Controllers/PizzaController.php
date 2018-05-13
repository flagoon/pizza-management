<?php

namespace App\Http\Controllers;

use App\Ingredient;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        return view('pizza.pizzas');
    }

    public function showIngredients()
    {
        $ingredients = Ingredient::all();
        return view('ingredient.ingredients', ['ingredients' => $ingredients]);
    }

    public function showCategories()
    {
        return view('category.categories');
    }
}
