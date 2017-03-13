<?php

namespace App\Http\Controllers;

use App\Novedad;
use App\Intervencion;
use Illuminate\Http\Request;

/**
 *
 * Class NovedadController
 * @package App\Http\Controllers
 *
 * @resource Novedad
 *
 * Representa las novedades que se han registrado para el equipo físico que se monitorea mediante el sistema.
 */

class NovedadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return Novedad::with('maniobra')->paginate($request->input('rpp', config('app.paginator.default_size')));
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
     * @param  \App\Novedad  $novedad
     * @return \Illuminate\Http\Response
     */
    public function show(Novedad $novedad)
    {
        //dd($novedad);
        return $novedad;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Novedad  $novedad
     * @return \Illuminate\Http\Response
     */
    public function edit(Novedad $novedad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Novedad  $novedad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Novedad $novedad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Novedad  $novedad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Novedad $novedad)
    {
        //
    }

    /**
     * Obtiene Novedades filtradas por intervencion.
     *
     * @param  Intervencion  $intervencion  La intervencion que se desea filtrar
     * @return Novedad|Collection           [description]
     */
    public function getByIntervencion(Request $request, Intervencion $intervencion)
    {
        $intervencionQb = Novedad::with('maniobra')->where('intervencion_id', $intervencion->id)->paginate($request->input('rpp', config('app.paginator.default_size')));

        return $intervencionQb;
    }
}
