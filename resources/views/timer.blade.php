<!-- resources/views/mindfulness.blade.php -->
@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="timer.css">
    {{-- <link rel="stylesheet" href="style.css"> --}}
@endsection

@section('content')
    <div class="container">
        <!-- Navbar -->
    </div>

    <main class="py-4">
        <section>
            <div class="background">
                <img src="{{ asset('img/home2.jpeg') }}" id="bg-img">
            </div>

            <div class="container-timer">
                <h1>Waktu Meditasi</h1>

                <div class="timer">
                    <div class="circle">
                        <div class="time">
                            <p id="minutes"></p>
                            <p>:</p>
                            <p id="seconds"></p>
                        </div>
                    </div>
                </div>

                <div class="controls">
                    <button id="start" onclick="start()"><i class="fa-solid fa-play"></i></button>

                    <a id="reset" href="timer.html"><i class="fa-solid fa-arrow-rotate-left"></i></a>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('script')
    <script src="./assets/js/timer.js"></script>
@endsection
