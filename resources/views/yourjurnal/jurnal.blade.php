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
                @foreach ($data as $item)
                <div class="music-container">
                    <div class="box">
                        <div class="img-music">

                        </div>
                        <div class="music-info">
                            <h5 class="music-title">{{$item->title}}</h5>
                            <p class="music-subtitle">{{$item->description}}</p>
                        </div>
                        <div class="play-icon">
                            <a href="{{ route('yourjurnal.show', $item->id_jurnal) }}" class="btn">Read</a>


                        </div>
                    </div>
                </div>
                @endforeach


                {{-- <img src="{{ asset('img/emptyfolder.png') }}" alt=""> --}}
            </div>

        </section>
        {{-- <button class="add-music-btn">
            <i class="fa-solid fa-plus"></i>
        </button> --}}
        <a href="{{route('yourjurnal.create')}}" class="add-music-btn">
            <i class="fa-solid fa-plus"></i>
        </a>
        </main>

@endsection
