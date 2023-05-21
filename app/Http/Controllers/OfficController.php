<?php

namespace App\Http\Controllers;

use App\Models\Offic;
use Illuminate\Http\Request;

/**
 * Class OfficController
 * @package App\Http\Controllers
 */
class OfficController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offics = Offic::paginate();

        return view('admin.offic.index')->with('offics',offic::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $offic = new Offic();
        return view('admin.offic.index')->with('offics',offic::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $offic=new offic();
        
        $offic->place_name=$request->place_name;
        $offic->address=$request->address;
        $offic->schedule=$request->schedule;
        $offic->telephone=$request->telephone;

        $offic->save();

        return view('admin.offic.index')->with('offics',offic::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $offic = Offic::find($id);

        return view('admin.offic.show') ->with('offic',offic::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offic = Offic::find($id);

        return view('admin.offic.edit') ->with('offic',offic::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Offic $offic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $offic=offic::find($id);
        
        $offic->place_name=$request->place_name;
        $offic->address=$request->address;
        $offic->schedule=$request->schedule;
        $offic->telephone=$request->telephone;

        $offic->save();

        return view('admin.offic.index')->with('offics',offic::all());
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $offic=offic::find($id);
        $offic->delete();
 
        return view('admin.offic.index')->with('offics',offic::all()) 
        ->with('mess','BORRADO CORRECTAMENTE');
     
    }
}
