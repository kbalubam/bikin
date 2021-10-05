<?php

namespace App\Http\Controllers;

use App\Models\User;
use Dotenv\Parser\Entry;
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
        $allUser = User::all();
        return view('back.user.allUser', compact('allUser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $this->authorize('user_create');
        return view('back.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            "name"=>['required'],
            "email"=>['required'],
            "password"=>['required'],
            "role_id"=>['required'],
            "created_at"=>['required'],
            ]);

        $newEntry = new User;
        $newEntry->name = $request->name;
        $newEntry->email = $request->email;
        $newEntry->password = $request->password;
        $newEntry->role_id = $request->role_id;
        $newEntry->created_at = $request->created_at;
        $newEntry->save();



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {

    
        return view('back.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $this->authorize('user_create');
        return view('back.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            "name"=>['required'],
            "email"=>['required'],
            "password"=>['required'],
            "role_id"=>['required'],
            "created_at"=>['required'],
            ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role_id = $request->role_id;
        $user->created_at = $request->created_at;
        $user->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $this->authorize('user_create');
        $user->delete();
        return redirect()->back();
    }
}
