<?php

namespace NxTMateriaalbeheer\Http\Controllers;

use NxTMateriaalbeheer\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users_all', ['users' => User::paginate(15)] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \NxTMateriaalbeheer\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         //check if in database
         //$user = User::find($user);
         $user = User::find($id);
         return view('admin.users_show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \NxTMateriaalbeheer\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \NxTMateriaalbeheer\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            ]);

            $user = User::find($id);

            $user->name = request('name');
            $user->email = request('email');


            $user->save();

            return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \NxTMateriaalbeheer\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

            $user->delete();


            $user->save();

            return redirect()->route('users.index');
    }
}
