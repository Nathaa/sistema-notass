<?php

namespace App\Http\Controllers;

use App\Asistencia;
use App\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\asistenciaRequest;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asistencias = Asistencia::paginate();

        return view('asistencias.index', compact('asistencias'));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos = Curso::get();
        return view('asistencias.create',compact('cursos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(asistenciaRequest $request)
    {
        $asistencia = Asistencia::create($request->all());

        return redirect()->route('asistencias.create', $asistencia->id)
         ->with('info', 'Control de asistencia guardado con éxito');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Asistencia $asistencia
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Asistencia $asistencia)
    {
        $cursos = Curso::get();
        return view('asistencias.edit', compact('asistencia','cursos'));
    }

     /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Asistencia               $asistencia
     *
     * @return \Illuminate\Http\Response
     */
    public function update(asistenciaRequest $request, Asistencia $asistencia)
    {
        $asistencia->update($request->all());

        return redirect()->route('asistencias.edit', $asistencia->id)
        ->with('info', 'Control de asistencia actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Asistencia $asistencia
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asistencia $asistencia)
    {
        $asistencia->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
