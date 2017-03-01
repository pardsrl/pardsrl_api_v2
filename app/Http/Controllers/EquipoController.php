<?php

namespace App\Http\Controllers;

use App\Equipo;
use App\Http\Requests\HistoricoRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\HttpException;

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

	    $user = Auth::user();

	    return $user->persona->equipos()->with(['compania'])->paginate($request->input('rpp',config('app.paginator.default_size')));

//        return Equipo::with(['personas','compania'])->where('persona',$user->persona)->paginate($request->input('rpp',config('app.paginator.default_size')));

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
	    $user = Auth::user();

	    if(! $user->persona->equipos->contains($equipo)) return App::abort(404,"Recurso no encontrado ");

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
	public function getHistorico(HistoricoRequest $request, Equipo $equipo ) {

		$reqParams = $request->only( 'tipo', 'condicion', 'resolucion', 'fecha_pozo', 'desde', 'hasta' );

		$aleatorio = mt_rand( 1, 9999 );

		$pythonScriptsDir = config( 'app.python.scripts_dir' );

		$params = ['python_scripts_dir' => $pythonScriptsDir];
		$params += ['equipo' => $equipo->namespace ];
		$params += $reqParams + [ 'aleatorio' => $aleatorio ];

		$formato = 'python %sjson_delivery_var.py %s %d %d %d %s %s %s %s';

		$comando = vsprintf( $formato, $params );

		$ejecuta = shell_exec( $comando );

		$filename = "$aleatorio.$equipo->namespace";

		if ( file_exists( $filename ) ) {
			$jsonStr = file_get_contents( $filename );

			$borra   = "rm -f " . $filename;
			shell_exec( $borra );

		} else {
			return new JsonResponse(['detail' => "No se pudo generar el archivo temporal de intervencion"], 500);
		}


		return response( $jsonStr )->header( 'Content-Type', 'application/json' );
	}

}
