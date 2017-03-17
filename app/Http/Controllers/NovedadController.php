<?php

namespace App\Http\Controllers;

use App\Novedad;
use App\Intervencion;
use Illuminate\Http\Request;
use App\Http\Requests\NovedadRequest;
use App\Maniobra;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

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
    public function store(NovedadRequest $request)
    {
        $param = $request->only(['maniobra','intervencion','inicio','fin','parcialManiobra','promedioUH','observaciones']);

        $novedad  = new Novedad();

        $maniobra     = Maniobra::find($param['maniobra']);

        $intervencion = Intervencion::find($param['intervencion']);

        $usuario = Auth::user();

        $novedad->inicio = new Carbon($param['inicio']);

        $novedad->fin = $param['fin'] ? new Carbon($param['fin']) : null;

        $novedad->parcial_maniobra = $param['parcialManiobra'];

        $novedad->promedio_uh = $param['promedioUH'];

        $novedad->observaciones = $param['observaciones'] ? $param['observaciones'] : null ;

        $novedad->activo = 1;

        $novedad->generado = 0;

        $novedad->maniobra()->associate($maniobra);

        $novedad->intervencion()->associate($intervencion);

        $novedad->creadoPor()->associate($usuario);

        $novedad->save();

        return $novedad;
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
    public function update(NovedadRequest $request, Novedad $novedad)
    {
        $param = $request->only(['maniobra','intervencion','inicio','fin','parcialManiobra','promedioUH','observaciones']);

        $maniobra     = Maniobra::find($param['maniobra']);

        $intervencion = Intervencion::find($param['intervencion']);

        $usuario = Auth::user();

        $novedad->inicio = new Carbon($param['inicio']);

        $novedad->fin = $param['fin'] ? new Carbon($param['fin']) : null;

        $novedad->parcial_maniobra = $param['parcialManiobra'];

        $novedad->promedio_uh = $param['promedioUH'];

        $novedad->observaciones = $param['observaciones'] ? $param['observaciones'] : null ;

        $novedad->activo = 1;

        $novedad->generado = 0;

        $novedad->maniobra()->associate($maniobra);

        $novedad->intervencion()->associate($intervencion);

        $novedad->actualizadoPor()->associate($usuario);

        $novedad->save();

        return $novedad;
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
