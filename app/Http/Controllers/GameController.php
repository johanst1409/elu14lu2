<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Company;
use App\Models\Platform;
use App\Models\Genre;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::orderBy('rating', 'desc')->get();
        return view('game.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $game = new Game;
        $game->released_at = time();
        $developers = Company::developer()->orderBy('name')->get();
        $publishers = Company::publisher()->orderBy('name')->get();
        $platforms = Platform::orderBy('released_at')->get();
        $genres = Genre::orderBy('name')->get();
        return view('game.form', compact('game', 'developers', 'publishers', 'platforms', 'genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validateRequest($request);
        $game = Game::create($data);
        $game->platforms()->sync($data['platforms']);
        $game->genres()->sync($data['genres']);
        return redirect()->route('games.show', $game->url_name);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $urlName
     * @return \Illuminate\Http\Response
     */
    public function show($urlName)
    {
        $game = Game::where('url_name', $urlName)->firstOrFail();
        return view('game.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $urlName
     * @return \Illuminate\Http\Response
     */
    public function edit($urlName)
    {
        $game = Game::where('url_name', $urlName)->firstOrFail();
        $developers = Company::developer()->orderBy('name')->get();
        $publishers = Company::publisher()->orderBy('name')->get();
        $platforms = Platform::orderBy('released_at')->get();
        $genres = Genre::orderBy('name')->get();
        return view('game.form', compact('game', 'developers', 'publishers', 'platforms', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $urlName
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $urlName)
    {
        $data = $this->validateRequest($request);
        $game = Game::where('url_name', $urlName)->firstOrFail();
        $game->update($data);
        $game->platforms()->sync($data['platforms']);
        $game->genres()->sync($data['genres']);
        return redirect()->route('games.show', $game->url_name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $urlName
     * @return \Illuminate\Http\Response
     */
    public function destroy($urlName)
    {
        $game = Game::where('url_name', $urlName)->firstOrFail();
        $game->platforms()->detach();
        $game->genres()->detach();
        $game->delete();
        return redirect()->back();
    }

    public function validateRequest(Request $request)
    {
        return $request->validate([
            //VALIDATION
            'name' => 'required',
            'description' => 'required',
            'rating' => 'integer|required',
            'developer_id' => 'required',
            'publisher_id' => 'required',
            'released_at' => 'date|required',
            'genres' => 'array',
            'platforms' => 'array'
        ], [
            //ERROR TEXT
        ], [
            //FIELD
        ]);
    }
}
