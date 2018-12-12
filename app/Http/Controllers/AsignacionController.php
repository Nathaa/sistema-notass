<?php

namespace App\Http\Controllers;

use App\Asignacion;
use App\Alumno;
use App\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\asignacionRequest;

class AsignacionController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asignaciones = Asignacion::get();
        $alumnos = Alumno::get();
        $cursos = Curso::get();

        return view('asignaciones.create', compact('alumnos', 'cursos', 'asignaciones'));
    }

    public function showAlumnos(Curso $curso)
    {
        $idCurso = $curso->id;
        $alumnos = Asignacion::where('curso_id', $idCurso)->get();

        return view('asignaciones.showAlumnos', compact('alumnos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(asignacionRequest $request)
    {
        //actualiza y obtiene los permisos y se le pasa un array permiso

        $asignacion = Asignacion::create($request->all());

        return redirect()->route('asignaciones.create', $asignacion->id)
         ->with('info', 'Inscripción guardada con éxito');
    }
}
