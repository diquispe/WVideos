<?php

namespace Xvideos\Http\Controllers\Auth;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Xvideos\Entities\User;
use Validator;
use Xvideos\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';
    /* despues de logueado envia a esta URL */

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create()
    {
        return view('auth.create');
/*
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

*/
        //dd($data);

    }

    protected function store(Request $request, Guard $auth)
    {


        // usando el inyector de dependencias Guard $auth
        // al enviar el formulario se enviar una solicitud del tipo POST con los datos enviados
        //dd($request->all());

        //validar datos

        $this->validate($request, [
            'name' => 'required|max:120',
            'email' => 'required|max:8',
            'password' => 'required|max:400',
        ]);

        User::create($request->all());
        $user = User::findOrFail($request);

        return Redirect::route('chicas.latest', compact('user'));


    }

    protected function edit($id)
    {
        $user = User::findOrFail($id);

        return view ("user.edit", compact("user"));
       //return "Estoy editando el usuario ". $id;
    }

    public function showProfile()
    {
        //return view('user.profile', ['user' => User::findOrFail($id)]);
        return view('user.profile');
    }


    public function dashboard() {

        return view('dashboard');
    }

}
