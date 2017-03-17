<?php

namespace App\Http\Controllers;

use App\Maniobra;
use Illuminate\Http\Request;

class ManiobraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return Maniobra::paginate($request->input('rpp', config('app.paginator.default_size')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Maniobra  $maniobra
     * @return \Illuminate\Http\Response
     */
    public function show(Maniobra $maniobra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Maniobra  $maniobra
     * @return \Illuminate\Http\Response
     */
    public function edit(Maniobra $maniobra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Maniobra  $maniobra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Maniobra $maniobra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Maniobra  $maniobra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Maniobra $maniobra)
    {
        //
    }
}
