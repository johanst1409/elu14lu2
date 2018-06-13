<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Platform;
use App\Models\Company;

class PlatformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $platforms = Platform::orderBy('released_at', 'desc')->get();
        return view('platform.index', compact('platforms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $platform = new Platform;
        $platform->released_at = time();
        $manufacturers = Company::manufacturer()->orderBy('name', 'asc')->get();
        return view('Platform.form', compact('platform', 'manufacturers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $platform = new Platform;
        $platform->create($this->validateRequest($request));
        return redirect()->route('platforms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $urlName
     * @return \Illuminate\Http\Response
     */
    public function show($urlName)
    {
        $platform = Platform::where('url_name', $urlName)->firstOrFail();
        return view('platform.show', compact('platform'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $urlName
     * @return \Illuminate\Http\Response
     */
    public function edit($urlName)
    {
        $platform = Platform::where('url_name', $urlName)->firstOrFail();
        $manufacturers = Company::manufacturer()->get();
        return view('platform.form', compact('platform', 'manufacturers'));
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
        $platform = Platform::where('url_name', $urlName)->firstOrFail();
        $platform->update($this->validateRequest($request));
        return redirect()->route('platforms.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $urlName
     * @return \Illuminate\Http\Response
     */
    public function destroy($urlName)
    {
        $platform = Platform::where('url_name', $urlName)->firstOrFail();
        $platform->games()->detach();
        $platform->delete();
        return redirect()->route('platforms.index');
    }

    private function validateRequest(Request $request)
    {
        return $request->validate([
            //VALIDATION
            'name' => 'required',
            'released_at' => 'date',
            'manufacturer_id' => 'required'
        ], [
            //ERROR TEXT
        ], [
            //FIELD
        ]);
    }
}
