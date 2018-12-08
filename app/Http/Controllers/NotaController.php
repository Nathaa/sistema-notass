<?php

namespace App\Http\Controllers;

use App\Nota;
use App\Alumno;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notas = Nota::paginate();

        return view('notas.index', compact('notas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumnos = Alumno::get();

        return view('notas.create', compact('alumnos'));
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
        $nota = Nota::create($request->all());

        return redirect()->route('notas.edit', $nota->id)
         ->with('info', 'Nota guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Nota $nota
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Nota $nota)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Nota $nota
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Nota $nota)
    {
        $alumnos = Alumno::get();

        return view('notas.edit', compact('nota', 'alumnos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Nota                $nota
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nota $nota)
    {
        $nota->update($request->all());

        return redirect()->route('notas.edit', $nota->id)
        ->with('info', 'Nota actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Nota $nota
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nota $nota)
    {
        $nota->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
