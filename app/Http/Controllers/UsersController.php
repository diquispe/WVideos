<?php

namespace Xvideos\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Xvideos\Entities\User;
use Xvideos\Http\Requests;

class UsersController extends Controller
{
    //

    public function latest()
    {
        $users = User::orderBy('created_at', 'DESC')->paginate(24);

        return view('user.lista', compact('users'));
    }

    public function store(Request $request)
    {
        return "Estoy almacenando un usuario";
        /*
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|unique',
            'password' => 'required',
        ]); */
        

    }

    public function showProfile()
    {
        //return view('user.profile', ['user' => User::findOrFail($id)]);
        return view('user.profile');
    }
    public function dashboard() {
        return view('dashboard');
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('auth.edit', compact('user'));
    }

    public function update($id,Request $request)
    {
        //dd($request);
        $user = User::findOrFail($id);
        $user->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);

        return view('auth.edit', compact('user'));
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return Redirect::route('users.latest', $user->id);
    }
    
}
