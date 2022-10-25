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
        $continents = Continent::all();
        return view('welcome',compact('teams','continents'));
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
            // 'role'=> 'required',
            'continent_id'=> 'required',
        ]);
        $store = new Team();
        $store->name = $request->name; 
        $store->land = $request->land; 
        $store->city = $request->city; 
        // $store->role = $request->role; 
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
        return view('pages.Team.Showteam');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('pages.Team.Editteam');
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
            // 'role'=> 'required',
            'continent_id'=> 'required',
        ]);
        $team = new Team();
        $team->name = $request->name; 
        $team->land = $request->land; 
        $team->city = $request->city; 
        // $team->role = $request->role; 
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
}
