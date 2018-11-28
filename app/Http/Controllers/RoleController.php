<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;

class roleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::paginate();

        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::get();

        return view('roles.create', compact('permissions'));
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
        $role = Role::create($request->all());

        //actualiza y obtiene los permisos y se le pasa un array permiso
        $role->permissions()->sync($request->get('permissions'));

        return redirect()->route('roles.edit', $role->id)
         ->with('info', 'role guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\role $role
     *
     * @return \Illuminate\Http\Response
     */
    public function show(role $role)
    {
        return view('roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\role $role
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(role $role)
    {
        $permissions = Permission::get();

        return view('roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\role                $role
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, role $role)
    {
        //actualiza usuario
        $role->update($request->all());

        //actualiza y obtiene los permisos y se le pasa un array permiso
        $role->permissions()->sync($request->get('permissions'));

        return redirect()->route('roles.edit', $role->id)
        ->with('info', 'Role actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\role $role
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(role $role)
    {
        $role->delete();

        return back()->with('info', 'Elimnado correctaamente');
    }
}
