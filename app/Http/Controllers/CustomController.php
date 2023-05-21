<?php

namespace App\Http\Controllers;

use App\Models\Custom;
use Illuminate\Http\Request;


/**
 * Class CustomController
 * @package App\Http\Controllers
 */
class CustomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customs = Custom::paginate();

        return view('admin.custom.index')->with('customs',custom::all());
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        $custom = new Custom();
        return view('admin.custom.index')->with('customs',custom::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $custom=new custom();
        
        $custom->name=$request->name;
        $custom->last_name=$request->last_name;
        $custom->email=$request->email;
        $custom->telephone=$request->telephone;
        $custom->license=$request->license;

        $custom->save();

        return view('admin.custom.index')->with('customs',custom::all());

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $custom = Custom::find($id);

        return view('admin.custom.show') ->with('custom',custom::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $custom = Custom::find($id);

        return view('admin.custom.edit') ->with('custom',custom::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Custom $custom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $custom=custom::find($id);
        
        $custom->name=$request->name;
        $custom->last_name=$request->last_name;
        $custom->email=$request->email;
        $custom->telephone=$request->telephone;
        $custom->license=$request->license;

        $custom->save();

        return view('admin.custom.index')->with('customs',custom::all());
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
       $custom=custom::find($id);
       $custom->delete();

       return view('admin.custom.index')->with('customs',custom::all()) 
       ->with('mess','BORRADO CORRECTAMENTE');
    }
}
