<?php

namespace App\Http\Controllers;

use App\Http\Requests\PizzaSizeRequest;
use App\Model\PizzaSize;
use Illuminate\Support\Facades\DB;

class PizzaSizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pizza.pizza_sizes', ['pizza_sizes' => PizzaSize::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PizzaSizeRequest $pizzaSize)
    {
        DB::table('pizza_sizes')->insert([
            'size_name' => $pizzaSize->size_name,
            'size_value' => $pizzaSize->size_value,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return redirect()->route('pizza-sizes.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PizzaSize $pizzaSize)
    {
        return view('pizza.edit-pizza-size', [
            'pizzaSize' => $pizzaSize
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PizzaSizeRequest $pizzaSize)
    {
        PizzaSize::where('size_name', $pizzaSize->size_name)->update([
                'size_name' => $pizzaSize->size_name,
                'size_value' => $pizzaSize->size_value
            ]
        );
        return redirect()->route('pizza-sizes.store');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PizzaSize $pizzaSize)
    {
        try {
            $pizzaSize->delete();
        } catch (\Exception $exception) {
            dd($exception);
        }

        return redirect()->route('pizza-sizes.index');
    }
}
