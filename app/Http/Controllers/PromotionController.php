<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

/**
 * Class PromotionController
 * @package App\Http\Controllers
 */
class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promotions = Promotion::paginate();

        return view('admin.promotion.index')->with('promotions',promotion::all());
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $promotion = new Promotion();
        return view('admin.promotion.index')->with('promotions',promotion::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $promotion=new promotion();
        
        $promotion->type=$request->type;
        $promotion->detail=$request->detail;
        $promotion->validity=$request->validity;
        
        $promotion->save();

        return view('admin.promotion.index')->with('promotions',promotion::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $promotion = Promotion::find($id);

        return view('admin.promotion.show')->with('promotion',promotion::find($id));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $promotion = Promotion::find($id);

        return view('admin.promotion.edit') ->with('promotion',promotion::find($id));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Promotion $promotion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $promotion=promotion::find($id);
        
        $promotion->type=$request->type;
        $promotion->detail=$request->detail;
        $promotion->validity=$request->validity;
        
        $promotion->save();

        return view('admin.promotion.index')->with('promotions',promotion::all());
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $promotion=promotion::find($id);
       $promotion->delete();

       return view('admin.promotion.index')->with('promotions',promotion::all()) 
       ->with('mess','BORRADO CORRECTAMENTE');
    }
}
