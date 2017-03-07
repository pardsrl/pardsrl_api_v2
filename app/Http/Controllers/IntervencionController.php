<?php

namespace App\Http\Controllers;

use App\Equipo;
use App\Http\Requests\IntervencionRequest;
use App\Intervencion;
use App\Pozo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    	$param = $request->only('equipo_id','pozo_id');

    	$where = [];

	    foreach ( $param as $key => $value ) {
		    if ($value) $where[] = [$key,'=',$value];
    	}

	    return Intervencion::where($where)->orderBy('fecha','DESC')->with(['pozo','pozo.yacimiento'])->paginate($request->input('rpp',config('app.paginator.default_size')));
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
    public function store(IntervencionRequest $request)
    {
	    $param = $request->only(['pozo','equipo','accion','fecha']);

	    $intervencion = new Intervencion();

	    $pozo = Pozo::find($param['pozo']);

	    $equipo = Equipo::find($param['equipo']);

	    $usuario = Auth::user();

	    $intervencion->fecha = new Carbon($param['fecha']);

	    $intervencion->accion = $param['accion'];

	    $intervencion->activo = 1;

	    $intervencion->pozo()->associate($pozo);

	    $intervencion->equipo()->associate($equipo);

	    $intervencion->creadoPor()->associate($usuario);

	    $intervencion->save();

	    return $intervencion;

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
