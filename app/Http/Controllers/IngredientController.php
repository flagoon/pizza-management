<?php

namespace App\Http\Controllers;

use App\Http\Requests\IngredientRequest;
use App\Model\Ingredient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ingredient.ingredients', ['ingredients' => Ingredient::all()]);
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
    public function store(IngredientRequest $ingredient)
    {
        DB::table('ingredients')->insert([
            'ingredient_name' => $ingredient->ingredient_name,
            'ingredient_description' => $ingredient->ingredient_description,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return redirect('ingredients');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  IngredientRequest $ingredient
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingredient $ingredient)
    {
        return view('ingredient.edit-ingredient', ['ingredient' => $ingredient]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $ingredient)
    {
        // TODO: remade this to use IngredientRequest
        $ingredient->validate(
            [
                'ingredient_name' => 'required|min:3'
            ],
            [
                'ingredient_name.required' => 'Name is required!',
                'ingredient_name.min' => 'At least 3 characters!'
            ]
        );

        Ingredient::where('id', $ingredient->id)->update([
            'ingredient_name' => $ingredient->ingredient_name,
            'ingredient_description' => $ingredient->ingredient_description
        ]);
        return redirect('ingredients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingredient $ingredient)
    {
        try {
            $ingredient->delete();
        } catch (\Exception $exception) {
            dd($exception);
        }

        return redirect('ingredients');
    }
}
