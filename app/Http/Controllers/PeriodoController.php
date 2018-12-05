<?php

namespace App\Http\Controllers;

use App\Periodo;
use Illuminate\Http\Request;
use App\Http\Requests\periodoRequest;

class PeriodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periodos = Periodo::paginate();

        return view('periodos.index', compact('periodos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('periodos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(periodoRequest $request)
    {
        $periodo = Periodo::create($request->all());

        return redirect()->route('periodos.edit', $periodo->id)
         ->with('info', 'periodo guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Periodo $periodo
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Periodo $periodo)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Periodo $periodo
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Periodo $periodo)
    {
        return view('periodos.edit', compact('periodo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Periodo             $periodo
     *
     * @return \Illuminate\Http\Response
     */
    public function update(periodoRequest $request, Periodo $periodo)
    {
        $periodo->update($request->all());

        return redirect()->route('periodos.edit', $periodo->id)
        ->with('info', 'periodo actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Periodo $periodo
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Periodo $periodo)
    {
        $periodo->delete();

        return back()->with('info', 'Elimnado correctaamente');
    }
}
