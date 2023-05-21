<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use Illuminate\Http\Request;

/**
 * Class FactController
 * @package App\Http\Controllers
 */
class FactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facts = Fact::paginate();
        return view('admin.fact.index')->with('facts',fact::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fact = new Fact();
        return view('admin.fact.index')->with('facts',fact::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fact=new fact();

        $fact->rfc=$request->rfc;
        $fact->reserv_id=$request->reserv_id;
        $fact->custom_id=$request->custom_id;

        $fact->save();

        return view('admin.fact.index')->with('facts',fact::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fact = Fact::find($id);

        return view('admin.fact.show') ->with('fact',fact::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fact = Fact::find($id);

        return view('admin.fact.edit') ->with('fact',fact::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Fact $fact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fact=fact::find($id);
        
        $fact->rfc=$request->rfc;
        $fact->reserv_id=$request->reserv_id;
        $fact->custom_id=$request->custom_id;

        $fact->save();

        return view('admin.fact.index')->with('facts',fact::all());
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $fact=fact::find($id);
        $fact->delete();
 
        return view('admin.fact.index')->with('facts',fact::all()) 
        ->with('mess','BORRADO CORRECTAMENTE'); 
    }
}
