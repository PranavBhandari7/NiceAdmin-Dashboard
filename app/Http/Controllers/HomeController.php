<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        // if (Auth::check()) {
        //     return redirect()->route('main.common');
        // }
        // else 
        //     return redirect()->route('main.welcome');
        // return view('main.home');
        if (Auth::check()) {
            return view('main.home');
        }
        else
            return view('main.welcome');
    }

    public function displaylogout()
    {
        // return view('home');
        return view('main.logout');
    }
}
