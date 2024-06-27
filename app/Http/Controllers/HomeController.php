<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('welcome');
    }

    public function tosaran(){
        return view('saran');
    }
    public function tolistmus(){
        return view('listmusic');
    }
    
    public function toplaymuc(){
        return view('playermusic');
    }

    public function totimer(){
        return view('timer');
    }

    public function tojurnal(){
        return view('jurnal');
    }

    public function createjurnal(){
        return view('bikinjurnal');
    }

    public function tidurcukup(){
        return view('waktutidur');
    }

    public function isiform(){
        return view('isiform');
    }

    public function menukesehatan(){
        return view('menukesehatan');
    }

    public function scoreview(){
        return view('scoreview');
    }

    public function bajur(){
        return view('bajur');
    }
}
