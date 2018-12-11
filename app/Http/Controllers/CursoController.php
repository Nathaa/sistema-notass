<?php

namespace App\Http\Controllers;

use App\Nota;
use App\User;
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
        $users = User::get();

        return view('cursos.create', compact('users'));
    }

    public function showAlumnos(Curso $curso)
    {
        $idCurso = $curso->id;
        $alumnos = Alumno::where('curso_id', $idCurso)->get();

        return view('cursos.showAlumnos', compact('alumnos'));
    }

    public function showCalificaciones($idCurso, $idAlumno)
    {
        $notas = Nota::where('curso_id', $idCurso)->where('alumno_id', $idAlumno)->get();
        $cantidad = Nota::where('curso_id', $idCurso)->where('alumno_id', $idAlumno)->count();

        $acumulador = 0;
        foreach ($notas as $n) {
            $acumulador += $n->notas;
        }
        $promedio = 0;
        $promedio = ($acumulador / $cantidad);

        return view('cursos.showCalificaciones', compact('notas', 'promedio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showcreate()
    {
        $users = User::get();

        return view('cursos.create', compact('users'));
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

        return redirect()->route('cursos.edit', $curso->id)
         ->with('info', 'Curso guardado con éxito');
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
        return view('cursos.show');
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
        $users = User::get();

        return view('cursos.edit', compact('curso', 'users'));
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
        ->with('info', 'Curso actualizado con éxito');
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

        return back()->with('info', 'Eliminado correctamente');
    }
}
