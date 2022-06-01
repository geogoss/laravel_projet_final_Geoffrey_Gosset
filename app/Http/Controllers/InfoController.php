<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Http\Requests\StoreInfoRequest;
use App\Http\Requests\UpdateInfoRequest;
use App\Models\Banner;
use Truc;

class InfoController extends Controller
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
     * @param  \App\Http\Requests\StoreInfoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInfoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function show(Info $info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function edit(Info $info)
    {
        $infos = Info::all();
        $banners = Banner::all();
        return view('pages.backoffice.aboutus.backEditAbout', compact('info', 'infos', 'banners'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInfoRequest  $request
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInfoRequest $request, Info $info)
    {
        if ($request->file) {
            $image = $request->file('file');
            $input['file'] = time() . '.' . $image->getClientOriginalExtension();
            // format 270x270
            $destinationPath = public_path('/thumbnail/images/aboutUs');
            $imgFile = Truc::make($image->getRealPath());
            $imgFile->resize(640, 427, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $input['file']);
            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $input['file']);



            $info->src = $input['file'];
            
        }



        $info->title = $request->title;
        $info->content1 = $request->content1;
        $info->content2 = $request->content2;
        $info->content3 = $request->content3;
        $info->address1 = $request->address1;
        $info->address2 = $request->address2;
        $info->phone = $request->phone;
        $info->email = $request->email;
        $info->save();


        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function destroy(Info $info)
    {
        //
    }
}
