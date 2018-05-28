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
        return view('sideDish.SideDishList', ['sideDishCollection' => SideDish::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sideDish.sideDishCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // TODO: use SideDishRequest
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\SideDish  $sideDish
     * @return \Illuminate\Http\Response
     */
    public function show(SideDish $sideDish)
    {
        // TODO: decide if I want to use it
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\SideDish  $sideDish
     * @return \Illuminate\Http\Response
     */
    public function edit(SideDish $sideDish)
    {
        // TODO: create view for edit
        return view('sideDish.sideDishEdit', compact($sideDish));
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
        // TODO: use SideDishRequest
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
