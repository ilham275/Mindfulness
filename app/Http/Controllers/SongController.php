<?php

namespace App\Http\Controllers;

use App\Models\SongModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SongModel::all();
        return view("admin.song", compact("data"));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.songcreate');
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
            'title' => 'required|string|max:255',
            'artist' => 'required|string|max:255',
            'audio_file' => 'required|mimes:mp3,wav,ogg|max:20480',
        ]);

        $audioPath = $request->file('audio_file')->store('audio', 'public');

        SongModel::create([
            'title' => $request->title,
            'artist' => $request->artist,
            'audio_file' => $audioPath,
        ]);

        return redirect()->route('song.index')->with('success', 'Lagu berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $request->validate([
            'title' => 'required|string|max:255',
            'artist' => 'required|string|max:255',
            'audio_file' => 'nullable|file|mimes:audio/mpeg,audio/mp3,audio/wav', // Sesuaikan dengan jenis file audio yang diizinkan
        ]);

        $song = SongModel::findOrFail($id);
        $song->title = $request->title;
        $song->artist = $request->artist;

        if ($request->hasFile('audio_file')) {
            // Hapus file audio lama jika ada
            if ($song->audio_file && Storage::disk('public')->exists($song->audio_file)) {
                Storage::disk('public')->delete($song->audio_file);
            }
            // Simpan file audio baru
            $audioPath = $request->file('audio_file')->store('audio', 'public');
            $song->audio_file = $audioPath;
        }
        $song->save();
        return redirect()->route('songs.index')->with('success', 'Lagu berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $song = SongModel::findOrFail($id);
        if ($song->audio_file && Storage::disk('public')->exists($song->audio_file)) {
            Storage::disk('public')->delete($song->audio_file);
        }

        $song->delete();

        return redirect()->route('song.index')->with('success', 'Lagu berhasil dihapus.');
    }
}
