<?php

namespace App\Http\Controllers;

use App\Http\Requests\PizzaSizeRequest;
use App\Model\PizzaSize;
use Illuminate\Support\Facades\DB;

class PizzaSizeController extends Controller
{
    /**
     * Display a listing of the pizzaSize.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pizza-size.pizza-sizeList', [ 'pizzaSizes' => PizzaSize::all() ]);
    }

    /**
     * Show the form for creating a new pizzaSize.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pizza-size.pizza-sizeCreate');
    }

    /**
     * Store a newly created pizzaSize in storage.
     *
     * @param  PizzaSizeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PizzaSizeRequest $request)
    {
        DB::table('pizza_sizes')->insert([
            'size_name' => $request->size_name,
            'size_value' => $request->size_value
        ]);

        return redirect()->route('pizza-sizes.index');
    }

    /**
     * Display the specified pizzaSize.
     *
     * @param  PizzaSize  $pizzaSize
     * @return PizzaSize  $pizzaSize
     */
    public function show(PizzaSize $pizzaSize)
    {
        return $pizzaSize;
    }

    /**
     * Show the form for editing the specified pizzaSize.
     *
     * @param  PizzaSize  $pizzaSize
     * @return \Illuminate\Http\Response
     */
    public function edit(PizzaSize $pizzaSize)
    {
        return view('pizza-size.pizza-sizeEdit', [ 'pizzaSize' => $pizzaSize ]);
    }

    /**
     * Update the specified pizzaSize in storage.
     *
     * @param  PizzaSizeRequest  $request
     * @param  PizzaSize  $pizzaSize
     * @return \Illuminate\Http\Response
     */
    public function update(PizzaSizeRequest $request, PizzaSize $pizzaSize)
    {
        $pizzaSize->update([
            'size_name' => $request->size_name,
            'size_value' => $request->size_value
        ]);

        return redirect()->route('pizza-sizes.index');
    }

    /**
     * Remove the specified pizzaSize from storage.
     *
     * @param  PizzaSize  $pizzaSize
     * @return \Illuminate\Http\Response
     */
    public function destroy(PizzaSize $pizzaSize)
    {
        try {
            $pizzaSize->delete();
        } catch (\Exception $exception) {
            return view('pizza-size.pizza-sizeList', [ 'errors' => $exception ]);
        }

        return redirect()->route('pizza-sizes.index');
    }
}
