<?php

namespace App\Http\Controllers;

use App\Model\SideDish;
use App\Model\SideDishType;
use Illuminate\Http\Request;

class SideDishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sideDishes = SideDish::all();
        return view('sideDish.SideDishList', ['sideDishCollection' => $sideDishes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dishTypes = SideDishType::all();
        return view('sideDish.sideDishCreate', compact('dishTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\SideDish  $sideDish
     * @return \Illuminate\Http\Response
     */
    public function show(SideDish $sideDish)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\SideDish  $sideDish
     * @return \Illuminate\Http\Response
     */
    public function edit(SideDish $sideDish)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\SideDish  $sideDish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SideDish $sideDish)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\SideDish  $sideDish
     * @return \Illuminate\Http\Response
     */
    public function destroy(SideDish $sideDish)
    {
        //
    }
}
