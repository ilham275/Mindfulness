@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="listmusic.css">
@endsection

@section('content')

    <div class="container">
        <!-- Navbar -->
    </div>

        <main class="py-4">
        <section class="listmusic" id="listmusic">
            <div class="listmusic-container">
                <div class="heading">
                    <h2>Jurnalku</h2>
                </div>
                
                <div class="music-container">
                    <div class="box">
                        <div class="img-music">
                        
                        </div>
                        <div class="music-info">
                            <h5 class="music-title">Judul Jurnal</h5>
                            <p class="music-subtitle">Isi Jurnal</p>
                        </div>
                        <div class="play-icon">
                            <a href="#menu" class="btn">Read</a>
                        </div>
                    </div>
                </div>

                <div class="music-container">
                    <div class="box">
                        <div class="img-music">
        
                        </div>
                        <div class="music-info">
                            <h5 class="music-title">Judul Jurnal</h5>
                            <p class="music-subtitle">Isi Jurnal</p>
                        </div>
                        <div class="play-icon">
                            <a href="#menu" class="btn">Read</a>
                        </div>
                    </div>
                </div>

                <div class="music-container">
                    <div class="box">
                        <div class="img-music">
                      
                        </div>
                        <div class="music-info">
                            <h5 class="music-title">Judul Jurnal</h5>
                            <p class="music-subtitle">Isi Jurnal</p>
                        </div>
                        <div class="play-icon">
                            <a href="#menu" class="btn">Read</a>
                        </div>
                    </div>
                </div>

                <div class="music-container">
                    <div class="box">
                        <div class="img-music">
                          
                        </div>
                        <div class="music-info">
                            <h5 class="music-title">Judul Jurnal</h5>
                            <p class="music-subtitle">Isi Jurnal</p>
                        </div>
                        <div class="play-icon">
                            <a href="#menu" class="btn">Read</a>
                        </div>
                    </div>
                </div>

                <div class="music-container">
                    <div class="box">
                        <div class="img-music">
                         
                        </div>
                        <div class="music-info">
                            <h5 class="music-title">Judul Jurnal</h5>
                            <p class="music-subtitle">Isi Jurnal</p>
                        </div>
                        <div class="play-icon">
                            <a href="#menu" class="btn">Read</a>
                        </div>
                    </div>
                </div>

                <div class="music-container">
                    <div class="box">
                        <div class="img-music">
                        
                        </div>
                        <div class="music-info">
                            <h5 class="music-title">Judul Jurnal</h5>
                            <p class="music-subtitle">Isi Jurnal</p>
                        </div>
                        <div class="play-icon">
                            <a href="#menu" class="btn">Read</a>
                        </div>
                    </div>
                </div>
                {{-- <img src="{{ asset('img/emptyfolder.png') }}" alt=""> --}}
            </div>  

        </section>
        {{-- <button class="add-music-btn">
            <i class="fa-solid fa-plus"></i>
        </button> --}}
        <a href="{{route('bikinjurnal')}}" class="add-music-btn">
            <i class="fa-solid fa-plus"></i>
        </a>
        </main>

@endsection
