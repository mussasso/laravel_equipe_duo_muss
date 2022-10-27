<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Player;
use App\Models\Team;
use Faker\Provider\Image;
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
        return view('pages.players.players', compact('players'));
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
        return view('pages.players.form', compact('players', 'team', 'photo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store= new Player();
        $store->name=$request->name;
        $store->lastname=$request->lastname;
        $store->age=$request->age;
        $store->phone=$request->phone;
        $store->email=$request->email;
        $store->genre=$request->genre;
        $store->pays=$request->pays;
        $store->role_id=$request->role_id;
        $store->team_id=$request->team_id;
        $store->photo_id=$request->file('image')->hashName();
        $store->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        return view('pages.players.show', compact('player'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        return view('pages.players.edit', compact('player'));
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
        Storage::delete('public/img/'.$player->photo_id);
        $player->delete();
        $player->name=$request->name;
        $player->lastname=$request->lastname;
        $player->age=$request->age;
        $player->phone=$request->phone;
        $player->email=$request->email;
        $player->genre=$request->genre;
        $player->pays=$request->pays;
        $player->role_id=$request->role_id;
        $player->team_id=$request->team_id;
        $player->photo_id=$request->file('image')->hashName();
        Storage::put('public/img/', $request->file('image'));
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
}
