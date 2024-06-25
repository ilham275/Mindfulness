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
            <a href="{{route('totimer')}}">
              <img src="{{ asset('img/iconmeditation.png') }}" alt="">
              <h3>Waktu Meditasi</h3>
            </a>
          </div>
          <div class="box">
            <a href="{{route('tolis')}}">
              <img src="{{ asset('img/iconmusic.png') }}" alt="">
              <h3>Rekomendasi Lagu</h3>
            </a>
          </div>
          <div class="box">
            <a href="{{route('tidurcukup')}}">
              <img src="{{ asset('img/iconsleep.png') }}" alt="">
              <h3>Tidur yang cukup</h3>
            </a>
          </div>
        </div>
      </section>
  </main>

@endsection
