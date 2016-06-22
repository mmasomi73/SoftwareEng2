<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;
use Auth;
use App\Http\Controllers\Redirect;
use Session;
use Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function firstpage()
    {
        return view('firstpage');
    }

    public function login()
    {
        return view('auth/login');
    }
    
    public function CheckLogin(Request $request)
    {
        $username = $request->get('username');
        $password = $request->get('passwd');
        if (Auth::attempt(array('username' => $username, 'password' => $password)))
        {
            $Result = ['accessGranted' => 1, 'username' => $username, 'password', $password];
        }else
        {
            $Result = ['accessGranted' => 0, 'username' => $username];
        }
        return $Result;
    }

    public function CheckLoginlll()
    {
        $Result = ['accessGranted' => 1, 'username' => 'mma', 'password'=> 'mma'];
        return $Result;
    }
}
