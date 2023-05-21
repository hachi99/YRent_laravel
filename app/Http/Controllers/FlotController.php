<?php

namespace App\Http\Controllers;

use App\Models\Flot;
use Illuminate\Http\Request;
use Storage;
/**
 * Class FlotController
 * @package App\Http\Controllers
 */
class FlotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $flots = Flot::paginate();

        return view('admin.flot.index')->with('flots',flot::all());

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $flot = new Flot();
        return view('admin.flot.index')->with('flots',flot::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $flot=new flot();
        $img=$flot->pic;
        $flot->details=$request->details;
        $flot->passenger=$request->passenger;
        $flot->doors=$request->doors;
        $flot->cost=$request->cost;
        if($request->hasFile('pic') && $request->file('pic')->isValid()){
            $img=$flot->id."_".$request->details.".".$request->pic->extension();
            $ruta=$request->pic->storeAs('public/flot/',$img);
        }
        $flot->pic=$img;

        $flot->save();

        return view('admin.flot.index')->with('flots',flot::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $flot = Flot::find($id);

        return view('admin.flot.show') ->with('flot',flot::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $flot = Flot::find($id);

        return view('admin.flot.edit') ->with('flot',flot::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Flot $flot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $flot=flot::find($id);
        $image=$flot->pic;
        $img=$flot->pic;
        $flot->details=$request->details;
        $flot->passenger=$request->passenger;
        $flot->doors=$request->doors;
        $flot->cost=$request->cost;
        if($request->hasFile('pic') && $request->file('pic')->isValid()){
            $img=$flot->id."_".$request->id.".".$request->pic->extension();
            $ruta=$request->pic->storeAs('public/flot/',$img);
            Storage::delete('public/flot'.$image);
        }
        $flot->pic=$img;


        $flot->save();

        return view('admin.flot.index')->with('flots',flot::all());
    }
    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $flot=flot::find($id);
       $flot->delete();

       return view('admin.flot.index')->with('flots',flot::all()) 
       ->with('mess','BORRADO CORRECTAMENTE');
    }
}
