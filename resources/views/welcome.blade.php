<!-- resources/views/mindfulness.blade.php -->
@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="style.css">
@endsection

@section('content')

    <div class="container">
        <!-- Navbar -->


        <!-- Home -->
        <section class="home" id="home">
            <div class="home-text">
                <h1>Mindfulness</h1>
                <p>This is a mental health application for your mental health</p>
                <a href="#menu" class="btn btn-custom">Get Started</a>
            </div>
            <div class="img-home">
                <img src="{{ asset('img/home2.jpeg') }}" alt="">
            </div>
        </section>

        <!-- Menu -->
        <section class="menu" id="menu">
            <div class="menu-container">
                <div class="box">
                    <a href="#">
                        <img src="{{ asset('img/menu1.jpg') }}" alt="">
                        <h3>Ukur Keadaan Mental</h3>
                    </a>
                </div>
                <div class="box">
                    <a href="menu.html">
                        <img src="{{ asset('img/menu3.jpg') }}" alt="">
                        <h3>Saran Kegiatan</h3>
                    </a>
                </div>
                <div class="box">
                    <a href="#">
                        <img src="{{ asset('img/menu2.jpg') }}" alt="">
                        <h3>Your Journal</h3>
                    </a>
                </div>
                <div class="box">
                    <a href="#">
                        <img src="{{ asset('img/menu4.jpg') }}" alt="">
                        <h3>Baca Journal</h3>
                    </a>
                </div>
            </div>
        </section>
    </div>

@endsection
