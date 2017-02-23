<?php

namespace App\Http\Controllers;

use App\Compania;
use Illuminate\Http\Request;

/**
 *
 * Class CompaniaController
 * @package App\Http\Controllers
 *
 * @resource Compañía
 *
 * Representa una compañía registrada en el sistema.
 */

class CompaniaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
	    return Compania::with([])->paginate($request->input('rpp',config('app.paginator.default_size')));
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
     * @param  \App\Compania  $compania
     * @return \Illuminate\Http\Response
     */
    public function show(Compania $compania)
    {
        return $compania;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Compania  $compania
     * @return \Illuminate\Http\Response
     */
    public function edit(Compania $compania)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Compania  $compania
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compania $compania)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Compania  $compania
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compania $compania)
    {
        //
    }
}
