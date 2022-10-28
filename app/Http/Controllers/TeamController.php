<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use App\Models\Photo;
use App\Models\Player;
use App\Models\Role;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $uncompleteteam = Team::all()->take(2)->where('maxplayers','<=',5);
        $europeteam = Team::all()->Where('continent_id',"=",1);
        $others = Team::all()->Where('continent_id',"!=",1);
        $continents = Continent::all();
        $players= Player::all();
        $images = Photo::all();
        return view('welcome',compact('images','teams','continents','completeteam','uncompleteteam','europeteam','others', 'players', 'images'));
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
        $players = Player::all();
        return view('pages.Team.Showteam', compact('team','continent','players'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team,$id)
    {
        $continent = Continent::all();
        $player = Player::all();
        $players = player::find($id);
        return view('pages.Team.Backeditteam',compact('team','continent','player','players'));
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
        $players= Player::all();
        $photo= Photo::all();
        $role= Role::all();
        $continents = Continent::all();
        return view('backoffice',compact('teams', 'continents','players','photo','role'));
    }

    public function allteam(){
        $allteams = Team::all();
        $player = Player::all();
        return view('pages.Allteams',compact('allteams','player'));
    }

    public function showteamtable($id){
        $team = Team::find($id);
        return view('pages.Team.BackShowteam', compact('team'));
    }
}
