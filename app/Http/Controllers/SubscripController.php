<?php

namespace App\Http\Controllers;

use App\Models\Subscrip;
use Illuminate\Http\Request;

/**
 * Class SubscripController
 * @package App\Http\Controllers
 */
class SubscripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscrips = Subscrip::paginate();

        return view('admin.subscrip.index')->with('subscrips',subscrip::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subscrip = new Subscrip();
        return view('admin.subscrip.index')->with('subscrips',subscrip::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subscrip=new subscrip();
        
        $subscrip->Name=$request->Name;
        $subscrip->telephone=$request->telephone;
        $subscrip->email=$request->email;

        $subscrip->save();

        return view('admin.subscrip.index')->with('subscrips',subscrip::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subscrip = Subscrip::find($id);

        return view('admin.subscrip.show')->with('subscrip',subscrip::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subscrip = Subscrip::find($id);

        return view('admin.subscrip.edit')->with('subscrip',subscrip::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Subscrip $subscrip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $subscrip=subscrip::find($id);

        $subscrip->Name=$request->Name;
        $subscrip->telephone=$request->telephone;
        $subscrip->email=$request->email;

        $subscrip->save();

        return view('admin.subscrip.index')->with('subscrips',subscrip::all());
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $subscrip=subscrip::find($id);
       $subscrip->delete();

       return view('admin.subscrip.index')->with('subscrips',subscrip::all()) 
       ->with('mess','BORRADO CORRECTAMENTE');
    }
}
