<?php

namespace App\Http\Controllers;

use App\Models\Reserv;
use Illuminate\Http\Request;

/**
 * Class ReservController
 * @package App\Http\Controllers
 */
class ReservController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reserv = Reserv::paginate();

        return view('admin.reserv.index')->with('reservs',reserv::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reserv = new Reserv();
        return view('admin.reserv.index')->with('reservs',reserv::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

        return view('admin.reserv.index')->with('reservs',reserv::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reserv = Reserv::find($id);

        return view('admin.reserv.show') ->with('reserv',reserv::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reserv = Reserv::find($id);

        return view('admin.reserv.edit') ->with('reserv',reserv::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Reserv $reserv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reserv=reserv::find($id);

        $reserv->offic_id=$request->offic_id;
        $reserv->collectiondate=$request->collectiondate;
        $reserv->returndate=$request->returndate;
        $reserv->flot_id=$request->flot_id;
        $reserv->promotion_id=$request->promotion_id;
        $reserv->custom_id=$request->custom_id;
        $reserv->insurcar_id=$request->insurcar_id;
        
        $reserv->save();

        return view('admin.reserv.index')->with('reservs',reserv::all());
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
      $reserv=reserv::find($id);
       $reserv->delete();

       return view('admin.reserv.index')->with('reservs',reserv::all()) 
       ->with('mess','BORRADO CORRECTAMENTE');
    }
}
