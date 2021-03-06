<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Alumno;
use Illuminate\Http\Request;
use App\Http\Requests\alumnoRequest;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumno::paginate();

        return view('alumnos.index', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos = Curso::get();

        return view('alumnos.create', compact('cursos'));
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

        $alumno = Alumno::create($request->all());

        return redirect()->route('alumnos.edit', $alumno->id)
         ->with('info', 'Alumno guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Alumno $alumno
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        return view('alumnos.show', compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Alumno $alumno
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno)
    {
        $cursos = Curso::get();

        return view('alumnos.edit', compact('alumno', 'cursos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Alumno              $alumno
     *
     * @return \Illuminate\Http\Response
     */
    public function update(alumnoRequest $request, Alumno $alumno)
    {
        $alumno->update($request->all());

        return redirect()->route('alumnos.edit', $alumno->id)
        ->with('info', 'Alumno actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Alumno $alumno
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
