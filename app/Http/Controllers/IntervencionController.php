<?php

namespace App\Http\Controllers;

use App\Intervencion;
use Illuminate\Http\Request;

/**
 * Class IntervencionController
 * @package App\Http\Controllers
 *
 * @resource Intervencion
 *
 * Representa las intervenciones que se han realizado en los equipos registrados en el sistema.
 */
class IntervencionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
	    return Intervencion::with(['pozo','pozo.yacimiento'])->paginate($request->input('rpp',config('app.paginator.default_size')));
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
     * @param  \App\Intervencion  $intervencion
     * @return \Illuminate\Http\Response
     */
    public function show(Intervencion $intervencion)
    {
	    //dd($e);
        return $intervencion;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Intervencion  $intervencion
     * @return \Illuminate\Http\Response
     */
    public function edit(Intervencion $intervencion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Intervencion  $intervencion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Intervencion $intervencion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Intervencion  $intervencion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Intervencion $intervencion)
    {
        //
    }
}
