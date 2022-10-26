<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all()->take(3);
        $completeteam = Team::all()->Where('maxplayers',"=",9);
        $uncompleteteam = Team::all()->take(2)->Where('maxplayers',">=",9);
        $europeteam = Team::all()->Where('continent_id',"=","Europe");
        $others = Team::all()->Where('continent_id',"=","Amerique");
        $continents = Continent::all();
        return view('welcome',compact('teams','continents','completeteam','uncompleteteam','europeteam','others'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Team::all();
        $continents = Continent::all();
        return view('pages.Addteam',compact('teams','continents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'city'=> 'required',
            'land'=> 'required',
            'maxplayers'=> 'required',
            'continent_id'=> 'required',
        ]);
        $store = new Team();
        $store->name = $request->name; 
        $store->land = $request->land; 
        $store->city = $request->city; 
        $store->maxplayers = $request->maxplayers; 
        $store->continent_id = $request->continent_id;
        $store->save();
        return redirect('/')->with('success', "Vous avez ajouté une équipe");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        $continent = Continent::all();
        return view('pages.Team.Showteam', compact('team','continent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        $continent = Continent::all();
        return view('pages.Team.Backeditteam',compact('team','continent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $request->validate([
            'name'=> 'required',
            'city'=> 'required',
            'land'=> 'required',
            'continent_id'=> 'required',
        ]);
        $team = new Team();
        $team->name = $request->name; 
        $team->land = $request->land; 
        $team->city = $request->city; 
        $team->maxplayers = $request->maxplayers; 
        $team->continent_id = $request->continent_id;
        $team->save();
        return redirect('/')->with('success', "Vous avez modifié une équipe");
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
        return redirect('/')->with('success', "Vous avez supprimé une équipe");
    }

    public function backoffice(){
        $teams = Team::all();
        $continents = Continent::all();
        return view('backoffice',compact('teams', 'continents'));
    }

    public function allteam(){
        $allteams = Team::all();
        return view('pages.Allteams',compact('allteams'));
    }

    public function showteamtable($id){
        $team = Team::find($id);
        return view('pages.Team.BackShowteam', compact('team'));
    }
}
