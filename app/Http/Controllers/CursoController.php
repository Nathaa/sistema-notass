<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Alumno;
use Illuminate\Http\Request;
use App\Http\Requests\cursoRequest;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::paginate();

        return view('cursos.index', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumnos = Alumno::get();

        return view('cursos.create', compact('alumnos'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function showAlumnos(Curso $curso)
    {
        $idCurso = $curso->id;
        $alumnos = Alumno::where('curso_id', $idCurso)->get();

        return view('cursos.showAlumnos', compact('alumnos'));
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
        $curso = Curso::create($request->all());

        return redirect()->route(compact('cursos.edit', 'alumnos.create'), $curso->id)
         ->with('info', 'curso guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Curso $curso
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        $alumnos = Alumno::get();

        return view('cursos.show', compact('alumnos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Curso $curso
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $curso)
    {
        $alumnos = Alumno::get();

        return view('cursos.edit', compact('curso', 'alumnos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Curso               $curso
     *
     * @return \Illuminate\Http\Response
     */
    public function update(cursoRequest $request, Curso $curso)
    {
        $curso->update($request->all());

        return redirect()->route('cursos.edit', $curso->id)
        ->with('info', 'curso actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Curso $curso
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $curso)
    {
        $curso->delete();

        return back()->with('info', 'Elimnado correctaamente');
    }
}
