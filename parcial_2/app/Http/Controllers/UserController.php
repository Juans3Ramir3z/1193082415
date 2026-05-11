<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    
    public function index()
    {
       $users=User::all();
       return view('user.index',compact('users'));
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $user=new User;
        $user->name=$request->nombre;
        $user->email=$request->correo;
        $user->password=$request->contrasenia;
        $user->birthday=$request->cumpleaños;
        return redirect()->route('users.index');
        return view ('users.index', compact('users'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user=User::find($id);
        return view ('users.edit', compact('users'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $user=find($id);
        $user->name=$request->nombre;
        $user->email=$request->correo;
        $user->password=$request->contrasenia;
        $user->birthday=$request->cumpleaños;
        return redirect()->route('users.index');
        return view ('users.index', compact('users'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
