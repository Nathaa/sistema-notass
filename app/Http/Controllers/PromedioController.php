<?php

namespace App\Http\Controllers;

use App\Promedio;
use Illuminate\Http\Request;

class PromedioController extends Controller
{
    public function index()
    {
        $cursos = \DB::table('cursos')->select('nombre', 'id')->get();

        return view('promedios.index', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    public function calificaciones()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Promedio $promedio
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Promedio $promedio)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Promedio $promedio
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Promedio $promedio)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Promedio            $promedio
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Promedio $promedio)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Promedio $promedio
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promedio $promedio)
    {
    }
}
