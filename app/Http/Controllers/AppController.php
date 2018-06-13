<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class AppController extends Controller
{
    public function index ()
    {
    	$games = Game::all();
    	return view('index', compact('games'));
    }
}
