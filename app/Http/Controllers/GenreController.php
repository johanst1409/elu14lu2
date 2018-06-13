<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genres = Genre::orderBy('name', 'asc')->get();
        return view('genre.index', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $genre = new Genre;
        $genre->create($this->validateRequest($request));
        return redirect()->route('genres.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $genre = Genre::find($id);
        return view('genre.show', compact('genre'));
    }

    /**
     * Validate user input
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    private function validateRequest(Request $request)
    {
        return $request->validate([
            //VALIDATION
            'name' => 'required',
        ], [
            //ERROR TEXT
        ], [
            //FIELD
        ]);
    }
}
