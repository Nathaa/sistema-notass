<?php

namespace App\Http\Controllers;

use App\Clase;
use App\Alumno;
use App\Estado;
use App\Listado;
use Illuminate\Http\Request;
use App\Http\Requests\listadoRequest;

class ListadoController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clases = Clase::get();
        $alumnos = Alumno::get();
        $estados = Estado::get();

        return view('listados.create', compact('clases', 'alumnos', 'estados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(listadoRequest $request)
    {
        $estado->estados()->sync($request->get('estados'));

        $estado = Estado::create($request->all());
        $listados = Listado::create($request->all());

        return redirect()->route('listados.create', $listados->id)
         ->with('info', 'Asistencia, guardada con éxito');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\estado $estado
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(listado $listado)
    {
        $estados = Estado::get();

        return view('estados.edit', compact('estado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\estado              $estado
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, listado $listado)
    {
        $estado->update($request->all());
        $estado->estados()->sync($request->get('estados'));

        return redirect()->route('estados.edit', $estado->id)
        ->with('info', 'estado actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\estado $estado
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(listado $listado)
    {
        $estado->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
