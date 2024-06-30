<!-- resources/views/mindfulness.blade.php -->
@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="playlist.css">
@endsection

@section('content')


<div class="container">

    <!-- Music player -->
    <main class="py-4">
    <div class="background">
        <img src="" id="bg-img">
    </div>

    <div class="container-player">
        <div class="player-img">
            <img src="" class="active" id="cover">
        </div>

        <h2 id="music-title"></h2>
        <h3 id="music-artist"></h3>

        <div class="player-progress" id="player-progress">
            <div class="progress" id="progress"></div>
            <div class="music-duration">
                <span id="current-time">0:00</span>
                <span id="duration">0:00</span>
            </div>
        </div>

        <div class="player-controls">
            <i class="fa-solid fa-backward" title="Previous" id="prev"></i>
            <i class="fa-solid fa-play play-button" title="Play" id="play"></i>
            <i class="fa-solid fa-forward" title="Next" id="next"></i>
        </div>
    </div>
    </main>
</div>




@endsection

@section('script')
<script src="./assets/js/script.js"></script>
@endsection
