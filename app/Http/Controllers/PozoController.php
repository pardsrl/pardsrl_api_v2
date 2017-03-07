<?php

namespace App\Http\Controllers;

use App\Pozo;
use Illuminate\Http\Request;

class PozoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return Pozo::paginate($request->input('rpp',config('app.paginator.default_size')));
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
     * @param  \App\Pozo  $pozo
     * @return \Illuminate\Http\Response
     */
    public function show(Pozo $pozo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pozo  $pozo
     * @return \Illuminate\Http\Response
     */
    public function edit(Pozo $pozo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pozo  $pozo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pozo $pozo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pozo  $pozo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pozo $pozo)
    {
        //
    }
}
