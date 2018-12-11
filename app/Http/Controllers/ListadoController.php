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
        $listados = Listado::create($request->all());

        return redirect()->route('listados.create', $listados->id)
         ->with('info', 'Asistencia, guardada con éxito');
    }
}
