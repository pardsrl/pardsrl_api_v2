<?php

namespace App\Http\Controllers;

use App\Equipo;
use App\Http\Requests\HistoricoRequest;
use Illuminate\Http\Request;

/**
 * Class EquipoController
 * @package App\Http\Controllers
 *
 * @resource Equipo
 *
 * Representa un equipo físico que se monitorea mediante el sistema.
 *
 */
class EquipoController extends Controller
{
    /**
     * GET Equipos
     * Se obtiene un listado de todos los equipos registrados en el sistema.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        return Equipo::with(['personas','compania'])->paginate($request->input('rpp',config('app.paginator.default_size')));

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
     * GET Equipo
     * Obtiene un equipo específico
     *
     * @param  \App\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function show(Equipo $equipo)
    {
        return $equipo;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipo $equipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipo $equipo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipo $equipo)
    {
        //
    }


	public function getPersonas( $id ) {
		return Equipo::with(['personas','personas.usuario'])->findOrFail($id);
    }

    /**
     * GET Historico
     *
     * Obtiene el conjunto de puntos que representan las variables del equipo en un rango de fechas determinado
     *
     */
	public function getHistorico(HistoricoRequest $request,$equipo ) {

		$reqParams = $request->only( 'tipo', 'condicion', 'resolucion', 'fecha_pozo', 'desde', 'hasta' );

		$aleatorio = mt_rand( 1, 9999 );

		$pythonScriptsDir = config( 'app.python.scripts_dir' );

		$params = ['python_scripts_dir' => $pythonScriptsDir];
		$params += ['equipo' => $equipo ];
		$params += $reqParams + [ 'aleatorio' => $aleatorio ];

		$formato = 'python %sjson_delivery_var.py %s %d %d %d %s %s %s %s';

		$comando = vsprintf( $formato, $params );

		$ejecuta = shell_exec( $comando );

		$filename = "$aleatorio.$equipo";

		if ( file_exists( $filename ) ) {
			$jsonStr = file_get_contents( $filename );

			unlink( $filename );

		} else {
			return abort( 500, "No se pudo generar el archivo temporal de intervencion" );
		}


		return response( $jsonStr )->header( 'Content-Type', 'application/json' );
	}

}
