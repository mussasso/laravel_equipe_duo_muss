<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use App\Models\Photo;
use App\Models\Player;
use App\Models\Role;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players= Player::all();
        return view('welcome', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $players = Player::all();
        $team= Team::all();
        $photo= Photo::all();
        $roles = Role::all();
        return view('pages.players.form', compact('players', 'team', 'photo','roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Storage::put('public/image/', $request->file('image'));
        $newimage = new Photo();
        $newimage->image = $request->file('image')->hashName();
        $newimage->save();
        
        $store= new Player();
        $store->name=$request->name;
        $store->lastname=$request->lastname;
        $store->age=$request->age;
        $store->phone=$request->phone;
        $store->email=$request->email;
        $store->genre=$request->genre;
        $store->pays=$request->pays;
        $store->team_id=$request->team_id;
        $store->role_id = $request->role_id;
        $store->photo_id = $newimage->id;
        $store->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $player= Player::find();
        $team= Team::all();
        $photo= Photo::find();
        return view('pages.players.show', compact('player', 'team', 'photo'));
    }
    public function showbiz(Player $player)
    {
        $team= Team::all();
        $photo= Photo::all();
        return view('pages.players.showbiz', compact('player', 'team', 'photo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        $continent= Continent::all();
        $team= Team::all();
        return view('pages.players.edit', compact('player', 'continent', 'team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
    {
        Storage::delete('public/image/'.$player->photo_id);
        $player->delete();
        $newimage = new Photo();
        $newimage->image = $request->file('photo_id')->hashName();
        Storage::put('public/image/', $request->file('photo_id'));
        $newimage->save();
        
        $player->name = $request->name;
        $player->lastname = $request->lastname;
        $player->age = $request->age;
        $player->phone = $request->phone;
        $player->email = $request->email;
        $player->genre = $request->genre;
        $player->pays = $request->pays;
        $player->role_id = $request->role_id;
        $player->team_id = $request->team_id;
        $player->photo_id = $newimage->id;
        $player->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        $player->delete();
        return redirect('/');
    }

    public function allplayers(){
        $players = Player::all();
        return view('pages.players.players', compact('players'));
    }
}
