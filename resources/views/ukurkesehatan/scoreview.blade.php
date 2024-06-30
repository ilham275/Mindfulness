@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="isiform.css">
<link rel="stylesheet" href="listmusic.css">
<style>

</style>
@endsection

@section('content')

    <div class="container">
        <!-- Navbar -->
    </div>
                <section class="container">
                    <div class="container-form">
                    <header>Score Kesehatan Mental</header>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr class="text-center">
                          <th>No</th>
                          <th>Time</th>
                          <th>Total Score</th>
                          <th>Category</th>
                          <th>Recommendation</th>
                          {{-- <th>Action</th> --}}
                        </tr>
                        </thead>
                        @foreach ($data as $kmr )
                        <tbody>
                        <td><center>{{$loop->iteration}}</center></td>
                        <td><center>{{$kmr->created_at}}</center></td>
                        <td><center>{{$kmr->total_score}}</center></td>
                        <td><center>{{$kmr->category}}</center></td>
                        <td><center>{{$kmr->recommendation}}</center></td>

                        </tbody>
                        @endforeach
                      </table>
                </div>
                  </section>

        </main>

@endsection
