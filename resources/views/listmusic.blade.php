<!-- resources/views/mindfulness.blade.php -->
@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="listmusic.css">
@endsection

@section('content')

    <div class="container">
        {{-- navbar --}}
    </div>
<main class="py-4">
        <section class="listmusic" id="listmusic">
            <div class="listmusic-container">
                <div class="heading">
                    <h2>Music Gallery</h2>
                </div>
                
                <div class="music-container">
                    <div class="box">
                        <div class="img-music">
                            <img src="{{ asset('img/music2.jpg') }}" alt="">
                        </div>
                        <div class="music-info">
                            <h5 class="music-title">Song Title 1</h5>
                            <p class="music-subtitle">Artist 1</p>
                        </div>
                        <div class="play-icon">
                           <a href="{{route('playmus')}}"><i class="fa-solid fa-play"></i></a>
                        </div>
                    </div>

                </div>
            </div>
         </section>
        </main>
        

@endsection

@section('script')
<script src="./assets/js/script.js"></script>
@endsection