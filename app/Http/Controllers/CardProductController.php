<?php

namespace App\Http\Controllers;

use App\Models\CardProduct;
use Illuminate\Http\Request;

class CardProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CardProduct  $cardProduct
     * @return \Illuminate\Http\Response
     */
    public function show(CardProduct $cardProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CardProduct  $cardProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(CardProduct $cardProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CardProduct  $cardProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CardProduct $cardProduct)
    {
       
        $cardProduct->amount = $request->name;
        $cardProduct->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CardProduct  $cardProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(CardProduct $cardProduct)
    {
        $cardProduct->delete();
        return redirect()->back();
    }
}
