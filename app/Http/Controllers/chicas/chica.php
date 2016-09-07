<?php

namespace Xvideos\Http\Controllers\admin;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Auth;
use Xvideos\Admin;

class Employee extends Controller
{
    public function __construct(){
        $this->middleware('chicas');
    }

    public function index(){
        return view('chicas.home');
    }
}