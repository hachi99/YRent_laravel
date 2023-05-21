<?php

namespace App\Http\Controllers;

use App\Models\flot;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PreciosController extends Controller
{
    //
    function show()
    {
        $datos= flot::all();
        return view('pricing',['flots'=>$datos]);
}
}