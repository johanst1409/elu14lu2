<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::orderBy('name', 'asc')->get();
        return view('company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company = new Company;
        return view('company.form', compact('company'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company = new Company;
        $company->create($this->validateRequest($request));
        return redirect()->route('companies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $urlName
     * @return \Illuminate\Http\Response
     */
    public function show($urlName)
    {
        $company = Company::where('url_name', $urlName)->firstOrFail();
        return view('company.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $urlName
     * @return \Illuminate\Http\Response
     */
    public function edit($urlName)
    {
        $company = Company::where('url_name', $urlName)->firstOrFail();
        return view('company.form', compact('company'));
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
        $company = Company::where('url_name', $urlName)->firstOrFail();
        $company->update($this->validateRequest($request));
        return redirect()->route('companies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $urlName
     * @return \Illuminate\Http\Response
     */
    public function destroy($urlName)
    {
        $company = Company::where('url_name', $urlName)->firstOrFail();
        $company->delete();
        return redirect()->route('companies.index');
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
            'is_developer' => 'boolean',
            'is_publisher' => 'boolean',
            'is_manufacturer' => 'boolean',
        ], [
            //ERROR TEXT
        ], [
            //FIELD
        ]);
    }
}
