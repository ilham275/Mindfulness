<!-- resources/views/mindfulness.blade.php -->
@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="waktutidur.css">
<link rel="stylesheet" href="style.css">
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
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Judul</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Isi Jurnal</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
            </div>
            <a href="#" class="btn-save">Save</a>
        </div>
        </main>
     

@endsection
