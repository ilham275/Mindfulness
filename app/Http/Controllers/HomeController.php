<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use App\Models\SongModel;
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
        // $this->middleware('auth');
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

    public function tosaran()
    {
        return view('saran');
    }
    public function tolistmus()
    {
        $songs = SongModel::all();
        return view('listmusic', compact('songs'));
    }

    public function toplaymuc($id)
    {
        $song = SongModel::find($id);

        if (!$song) {
            return response()->json(['error' => 'Song not found.'], 404);
        }

        return response()->json(['song' => $song]);
    }

    public function totimer()
    {
        return view('timer');
    }

    public function tojurnal()
    {
        return view('jurnal');
    }

    public function createjurnal()
    {
        return view('bikinjurnal');
    }

    public function tidurcukup()
    {
        return view('waktutidur');
    }

    public function isiform()
    {
        return view('isiform');
    }


    public function scoreview()
    {
        return view('scoreview');
    }

    public function bajur()
    {
        $data = Journal::all();
        return view('bajur', compact('data'));
    }
}
