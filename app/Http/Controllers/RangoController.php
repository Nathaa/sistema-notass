<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Rango;
use App\Periodo;
use Illuminate\Http\Request;

class RangoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rangos = Rango::paginate();

        return view('rangos.index', compact('rangos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $periodos = Periodo::get();
        $cursos = Curso::get();

        return view('rangos.create', compact('periodos', 'cursos'));
    }

    public function createCursos(Rango $rangos)
    {
        $cursos = Curso::paginate();

        return view('rangos.createCursos', compact('cursos'));
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
        $rango = Rango::create($request->all());

        return redirect()->route('rangos.edit', $rango->id)
         ->with('info', 'Rango guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Rango $rango
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Rango $rango)
    {
        return view('rangos.show', compact('rango'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Rango $rango
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Rango $rango)
    {
        $periodos = Periodo::get();
        $cursos = Curso::get();

        return view('rangos.edit', compact('rango', 'periodos', 'cursos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Rango               $rango
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rango $rango)
    {
        $rango->update($request->all());

        return redirect()->route('rangos.edit', $rango->id)
        ->with('info', 'Rango actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Rango $rango
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rango $rango)
    {
        $rango->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
