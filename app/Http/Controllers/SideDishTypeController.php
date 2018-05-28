<?php

namespace App\Http\Controllers;

use App\Http\Requests\SideDishTypeRequest;
use App\Model\SideDishType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SideDishTypeController extends Controller
{
    /**
     * Display a listing of the side dish types.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sideDish.sideDishTypeList', [
            'sideDishTypes' => SideDishType::all()
        ]);
    }

    /**
     * Store a newly created side dish type in storage.
     *
     * @param  SideDishTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SideDishTypeRequest $request)
    {
        DB::table('side_dish_types')->insert([
            'side_dish_type' => $request->side_dish_type
        ]);

        return redirect()->route('side-dish-type.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\SideDishType  $sideDishType
     * @return \App\Model\SideDishType  $sideDishType
     */
    public function show(SideDishType $sideDishType)
    {
        return $sideDishType;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\SideDishType  $sideDishType
     * @return \Illuminate\Http\Response
     */
    public function edit(SideDishType $sideDishType)
    {
        return view('sideDish.sideDishTypeEdit', [
            'sideDishType' => $sideDishType
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  SideDishTypeRequest  $request
     * @param  SideDishType  $sideDishType
     * @return \Illuminate\Http\Response
     */
    public function update(SideDishTypeRequest $request, SideDishType $sideDishType)
    {
        $sideDishType->update(['side_dish_type' => $request->side_dish_type]);
        return redirect()->route('side-dish-type.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\SideDishType  $sideDishType
     * @return \Illuminate\Http\Response
     */
    public function destroy(SideDishType $sideDishType)
    {
        try {
            $sideDishType->delete();
        } catch (\Exception $exception) {
            return redirect()->route('side-dish-type.index')->withErrors($exception);
        }

        return redirect()->route('side-dish-type.index');
    }
}
