<!-- resources/views/mindfulness.blade.php -->
@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="../waktutidur.css">
    <link rel="stylesheet" href="../style.css">
@endsection

@section('content')
    <div class="container">
        <!-- Navbar -->
    </div>

    <main>
        <div class="container-content">
            <div class="heading">
                <h2>Jurnalku</h2>
            </div>
            <div class="content">

                <form method="POST" action="{{route('yourjurnal.update', $data->id_jurnal)}}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="journalTitle" class="form-label">Judul</label>
                        <input type="text" name="title" class="form-control" id="journalTitle" placeholder="Masukkan judul jurnal" value="{{ $data['title'] }}">
                    </div>
                    <div class="mb-3">
                        <label for="journalDescription" class="form-label">Isi Jurnal</label>
                        <textarea name="description" class="form-control" id="journalDescription" rows="3" placeholder="Masukkan isi jurnal">{{ $data['description'] }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>

            </div>
        </div>
    </main>
@endsection
