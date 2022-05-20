<?php

namespace App\Http\Controllers;

use App\Models\Diapo;
use App\Http\Requests\StoreDiapoRequest;
use App\Http\Requests\UpdateDiapoRequest;

class DiapoController extends Controller
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
     * @param  \App\Http\Requests\StoreDiapoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDiapoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Diapo  $diapo
     * @return \Illuminate\Http\Response
     */
    public function show(Diapo $diapo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Diapo  $diapo
     * @return \Illuminate\Http\Response
     */
    public function edit(Diapo $diapo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDiapoRequest  $request
     * @param  \App\Models\Diapo  $diapo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDiapoRequest $request, Diapo $diapo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Diapo  $diapo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diapo $diapo)
    {
        //
    }
}
