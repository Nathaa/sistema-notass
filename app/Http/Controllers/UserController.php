<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate();

        return view('users.index', compact('users'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\user $user
     *
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\user $user
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\user                $user
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
        $user->update($request->all());

        return redirect()->route('users.edit', $user->id)
        ->with('info', 'user actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\user $user
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        $user->delete();

        return back()->with('info', 'Elimnado correctaamente');
    }
}
