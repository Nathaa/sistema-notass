<?php

namespace App\Http\Controllers;

use App\Curso;
use App\estado;
use Illuminate\Http\Request;
use App\Http\Requests\estadoRequest;

class estadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estados = Estado::paginate();

        return view('estados.index', compact('estados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos = Curso::get();

        return view('estados.create', compact('cursos'));
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
        //actualiza y obtiene los permisos y se le pasa un array permiso

        $estado = Estado::create($request->all());

        return redirect()->route('estados.edit', $estado->id)
         ->with('info', 'estado guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\estado $estado
     *
     * @return \Illuminate\Http\Response
     */
    public function show(estado $estado)
    {
        return view('estados.show', compact('estado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\estado $estado
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(estado $estado)
    {
        $cursos = Curso::get();

        return view('estados.edit', compact('estado', 'cursos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\estado              $estado
     *
     * @return \Illuminate\Http\Response
     */
    public function update(estadoRequest $request, estado $estado)
    {
        $estado->update($request->all());

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
    public function destroy(estado $estado)
    {
        $estado->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
