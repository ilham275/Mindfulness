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
                @foreach ($songs as $dt)
                    <div class="music-container">
                        <div class="box">
                            <div class="img-music">
                                <img src="{{ asset('img/music2.jpg') }}" alt="">
                            </div>
                            <div class="music-info">
                                <h5 class="music-title">{{ $dt->title }}</h5>
                                <p class="music-subtitle">{{ $dt->artist }}</p>
                            </div>
                            <div class="play-icon">
                                        <a href="#" class="play-btn" data-song="{{ $dt->id_song }}"><i class="fa-solid fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
@endsection
@section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var audio = new Audio(); // Buat elemen audio di luar fungsi playSong untuk diakses global

            $('.play-btn').click(function(e) {
                e.preventDefault();
                var songId = $(this).data('song');
                playSong(songId);
            });

            function playSong(songId) {
                // Implementasi AJAX untuk memuat informasi lagu dan memulai pemutaran
                $.ajax({
                    url: '/playmusic/' + songId, // Sesuaikan dengan rute yang sesuai untuk memutar lagu
                    method: 'GET',
                    success: function(response) {
                        // Dapatkan informasi lagu dari response dan lakukan pemutaran
                        var song = response.song;
                        audio.src = '{{ asset('storage/') }}/' + song.audio_file;
                        audio.play();

                        // Tampilkan informasi lagu ke pemutar musik Anda (jika perlu)
                        document.getElementById('music-title').textContent = song.title;
                        document.getElementById('music-artist').textContent = song.artist;
                        document.getElementById('cover').src = '{{ asset('img/music2.jpg') }}'; // Ganti dengan path cover yang sesuai
                    },
                    error: function(err) {
                        console.log(err);
                        alert('Gagal memuat lagu.');
                    }
                });
            }

            // Tombol Pause
            $('#pause').click(function(e) {
                e.preventDefault();
                if (!audio.paused) {
                    audio.pause();
                }
            });
        });
    </script>
@endsection
