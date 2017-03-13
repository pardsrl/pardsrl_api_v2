<?php

namespace App\Http\Controllers;

use App\Pozo;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class PozoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $params = $request->only('estado');

        $page = $request->get('page', 1);

        $rpp = $request->input('rpp', config('app.paginator.default_size'));

        if (isset($params['estado'])) {
            $pozosFiltrados = Pozo::all()->filter(function (Pozo $pozo, $key) use ($params) {
                return $pozo->isAbierto() == $params['estado'];
            });

            //http://stackoverflow.com/a/38712699/7686911
            $paginator = new LengthAwarePaginator($pozosFiltrados->forPage($page, $rpp)->values(), $pozosFiltrados->count(), $rpp, $page);

            return $paginator;
        }

        return Pozo::paginate($rpp);
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
