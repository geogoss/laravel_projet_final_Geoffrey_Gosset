<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Models\Banner;
use App\Models\Info;
use Truc;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infos = Info::all();
        $banners = Banner::all(); 
        $chiefs = Team::where('fonction', 'The Big Boss')->first();   
        $teams = Team::where(function ($query) {
            $query->where('fonction', '!=', 'The Big Boss');
        })->inRandomOrder()->limit(3)
        ->get();
        return view('pages.about', compact('infos', 'banners' ,'teams', 'chiefs'));
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
     * @param  \App\Http\Requests\StoreTeamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeamRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        $infos = Info::all();
        return view('pages.backoffice.aboutus.backEditTeam', compact('team', 'infos')  );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeamRequest  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeamRequest $request, Team $team)
    {

        if ($request->file) {
            $image = $request->file('file');
            $input['file'] = time() . '.' . $image->getClientOriginalExtension();
            // format 270x270
            $destinationPath = public_path('/thumbnail/images/120x120');
            $imgFile = Truc::make($image->getRealPath());
            $imgFile->resize(120, 120, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $input['file']);
            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $input['file']);



            $team->src = $input['file'];
            
        }


        $team->name = $request->name;
        $team->firstname = $request->firstname;
        $team->age = $request->age;
        $team->content = $request->content;
        $team->fonction = $request->fonction;
        $oldBoss = Team::where('fonction', 'like', 'The Big Boss')->first();
        if ($request->fonction == 'The Big Boss') {
           if ($oldBoss != null) {
               $oldBoss->fonction = 'Employe';
               $oldBoss->save();  
           }
            $team->fonction = $request->fonction;
        }else{
            $team->fonction = $request->fonction;

        }
        $team->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->back();
    }
}
