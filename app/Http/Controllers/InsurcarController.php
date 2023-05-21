<?php

namespace App\Http\Controllers;

use App\Models\Insurcar;
use Illuminate\Http\Request;

/**
 * Class InsurcarController
 * @package App\Http\Controllers
 */
class InsurcarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insurcars = Insurcar::paginate();

        return view('admin.insurcar.index')->with('insurcars',insurcar::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $insurcar = new Insurcar();
        return view('admin.insurcar.index')->with('insurcars',insurcar::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insurcar=new insurcar();
        
        $insurcar->type=$request->type;
        $insurcar->characteristic=$request->characteristic;
        $insurcar->cost=$request->cost;
      
        $insurcar->save();

        return view('admin.insurcar.index')->with('insurcars',insurcar::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $insurcar = Insurcar::find($id);

        return view('admin.insurcar.show')->with('insurcar',insurcar::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $insurcar = Insurcar::find($id);

        return view('admin.insurcar.edit')->with('insurcar',insurcar::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Insurcar $insurcar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $insurcar=insurcar::find($id);
        
        $insurcar->type=$request->type;
        $insurcar->characteristic=$request->characteristic;
        $insurcar->cost=$request->cost;
      
        $insurcar->save();

        return view('admin.insurcar.index')->with('insurcars',insurcar::all());
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $insurcar=insurcar::find($id);
       $insurcar->delete();

       return view('admin.insurcar.index')->with('insurcars',insurcar::all()) 
       ->with('mess','BORRADO CORRECTAMENTE');
    }
}
