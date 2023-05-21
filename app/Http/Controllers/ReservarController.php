<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\reserv;

class ReservarController extends Controller
{
    //
    function add(Request $request)
    {
        $reserv=new reserv();
        
        $reserv->offic_id=$request->offic_id;
        $reserv->collectiondate=$request->collectiondate;
        $reserv->returndate=$request->returndate;
        $reserv->flot_id=$request->flot_id;
        $reserv->promotion_id=$request->promotion_id;
        $reserv->custom_id=$request->custom_id;
        $reserv->insurcar_id=$request->insurcar_id;
        
        $reserv->save();
        return redirect('/Confirmacion');
    }
}
