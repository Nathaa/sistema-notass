<?php

namespace App\Http\Controllers;

use App\Clase;
use App\Asistencia;
use Illuminate\Http\Request;
use App\Http\Requests\claseRequest;

class ClaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clases = Clase::paginate();

        return view('clases.index', compact('clases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clases = Clase::get();
        $asistencias = Asistencia::get();

        return view('clases.create', compact('clases'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(claseRequest $request)
    {
        $clase = Clase::create($request->all());

        return redirect()->route('clases.create', $clase->id)
         ->with('info', 'Clase guardada con éxito');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Clase $clase
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Clase $clase)
    {
        $clases = Clase::get();
        $asistencias = Asistencia::get();

        return view('clases.edit', compact('clases', 'asistencia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Clase               $clase
     *
     * @return \Illuminate\Http\Response
     */
    public function update(claseRequest $request, Clase $clase)
    {
        $clase->update($request->all());

        return redirect()->route('clases.edit', $clase->id)
        ->with('info', 'Clase actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Clase $clase
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clase $clase)
    {
        $clase->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
