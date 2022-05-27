<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\City;
use App\Models\Country;
use App\Models\Info;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $infos = Info::all();
        // $banners = Banner::all();
        // $countries = Country::all();
        // $states = State::all();
        // $cities = City::all();
        // return view('pages.myaccount', compact('infos', 'banners', 'countries', 'states', 'cities'));
    
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $infos = Info::all();
        // $banners = Banner::all();
        // $countries = Country::all();
        // $states = State::all();
        // $cities = City::all();
    
        // return view('pages.myaccount', compact('edit', 'infos', 'banners', 'countries', 'states', 'cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $update = User::where('id', Auth::user()->id)->first();
        $update->name = $request->name;
        $update->phone = $request->phone;
        $update->email = $request->email;
        $update->company = $request->company;
        $update->address = $request->address;
        $update->avatar_id = $request->avatar_id;
        $update->role_id = $request->role_id;
        $update->billing_id = $request->billing_id;
        $update->country_id = $request->country_id;
        $update->state_id = $request->state_id;
        $update->city_id = $request->city_id;
        $update->save();
        return redirect('pages.myaccount');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
