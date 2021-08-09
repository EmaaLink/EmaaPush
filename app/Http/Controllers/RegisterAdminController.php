<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterAdmindController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function index(){

    	//dd('index page');

    	return view('admin.list');
    }


    public function create(){

    	dd('registe_admin');
    }
}
