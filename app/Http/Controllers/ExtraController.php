<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtraController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function show()
    {
        return view('extra.extras');
    }
}
