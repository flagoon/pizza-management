<?php

namespace App\Http\Controllers;

use App\Http\Requests\SideDishRequest;
use App\Model\SideDish;
use App\Model\SideDishType;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class SideDishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sideDish.SideDishList', ['sideDishCollection' => SideDish::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sideDish.sideDishCreate', ['dishTypes' => SideDishType::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SideDishRequest  $sideDish
     * @return \Illuminate\Http\Response
     */
    public function store(SideDishRequest $sideDish)
    {
        DB::table('side_dishes')->insert([
            'side_dish_name' => $sideDish->side_dish_name,
            'side_dish_type_id' => $sideDish->side_dish_type_id,
            'side_dish_volume' => $sideDish->side_dish_volume,
            'side_dish_description' => $sideDish->side_dish_description,
            'side_dish_price' => $sideDish->side_dish_price
        ]);
        return redirect()->route('side-dish.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\SideDish  $sideDish
     * @return Collection
     */
    public function show(SideDish $sideDish)
    {
        $sideDishNew = DB::table('side_dishes')
            ->leftJoin('side_dish_types', 'side_dish_type_id', '=', 'side_dish_types.id')
            ->where('side_dishes.id', '=', $sideDish->id)
            ->get();
        return $sideDishNew;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\SideDish  $sideDish
     * @return \Illuminate\Http\Response
     */
    public function edit(SideDish $sideDish)
    {
        $selectedSideDish = $sideDishNew = DB::table('side_dishes')
            ->leftJoin('side_dish_types', 'side_dishes.side_dish_type_id', '=', 'side_dish_types.id')
            ->where('side_dishes.id', '=', $sideDish->id)
            ->select([
                'side_dishes.id',
                'side_dishes.side_dish_name',
                'side_dishes.side_dish_description',
                'side_dishes.side_dish_volume',
                'side_dishes.side_dish_price',
                'side_dish_types.side_dish_type_name',
            ])
            ->first();

        return view('sideDish.sideDishEdit', [
            'sideDish' => $selectedSideDish,
            'dishTypes' => SideDishType::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\SideDishRequest  $request
     * @param  \App\Model\SideDish  $sideDish
     * @return \Illuminate\Http\Response
     */
    public function update(SideDishRequest $request, SideDish $sideDish)
    {
        $sideDish->update([
            'side_dish_name' => $request->side_dish_name,
            'side_dish_type_id' => $request->side_dish_type_id,
            'side_dish_volume' => $request->side_dish_volume,
            'side_dish_description' => $request->side_dish_description,
            'side_dish_price' => $request->side_dish_price
        ]);

        return redirect()->route('side-dish.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\SideDish  $sideDish
     * @return \Illuminate\Http\Response
     */
    public function destroy(SideDish $sideDish)
    {
        try {
            $sideDish->delete();
        } catch (\Exception $exception) {
            return view('sideDish.sideDishEdit', ['errors' => $exception]);
        }
        return redirect()->route('side-dish.index');
    }
}
