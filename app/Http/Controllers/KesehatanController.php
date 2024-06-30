<?php

namespace App\Http\Controllers;

use App\Models\ScoreKesehatan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KesehatanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ukurkesehatan.menukesehatan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ukurkesehatan.isiform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userId = Auth::user()->id;
        $totalScore = $request->input('totalScore');
        if ($totalScore >= 0 && $totalScore <= 4) {
            $category = "Tidak ada gejala depresi";
            $recommendation = "Dianjurkan psikoedukasi bila ada perburukan gejala";
        } elseif ($totalScore >= 5 && $totalScore <= 9) {
            $category = "Gejala depresi ringan";
            $recommendation = "Dianjurkan observasi gejala dalam 1 bulan dan pertimbangan terapi psikoterapi singkat";
        } elseif ($totalScore >= 10 && $totalScore <= 14) {
            $category = "Depresi ringan";
            $recommendation = "Dianjurkan antidepresan atau psikoterapi singkat";
        } elseif ($totalScore >= 15 && $totalScore <= 19) {
            $category = "Depresi sedang";
            $recommendation = "Dianjurkan antidepresan atau psikoterapi";
        } elseif ($totalScore >= 20) {
            $category = "Depresi berat";
            $recommendation = "Dianjurkan antidepresan tunggal atau kombinasi dengan psikoterapi intensif";
        }
        $data = ScoreKesehatan::create([
            'user_id' => auth()->id(),
            'total_score' => $totalScore,
            'category' => $category,
            'recommendation' => $recommendation,
        ]);

        return redirect()->route('readscore')->with('success', 'Hasil penilaian berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $userId = Auth::user()->id;
        $user = User::findOrFail($userId);
        $data = $user->scoreKesehatan();
        return view('ukurkesehatan.scoreview', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function read()
    {
        $userId = Auth::user()->id;
        $data = ScoreKesehatan::where('user_id', $userId)->get();
        return view('ukurkesehatan.scoreview', compact('data'));
    }
}
