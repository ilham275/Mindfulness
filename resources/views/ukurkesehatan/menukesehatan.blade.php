<!-- resources/views/mindfulness.blade.php -->
@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="style.css">
@endsection

@section('content')

    <div class="container">
        <!-- Navbar -->
    </div>
      <main class="py-4">
        <!-- Menu -->
        <section class="option" id="option">
        <!-- Container -->
        <div class="option-container">
          <div class="box">
            <a href="{{route('kesehatan.create')}}">
              <img src="{{ asset('img/isiform.jpeg') }}" alt="">
              <h3>Isi From Kesehatan</h3>
            </a>
          </div>
          <div class="box">
            <a href="{{route('readscore')}}">
              <img src="{{ asset('img/score.png') }}" alt="">
              <h3>Score Kesehatan</h3>
            </a>
          </div>
        </div>
      </section>
  </main>

@endsection
