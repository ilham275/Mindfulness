@extends('layouts.admin')
@section('content')

<div class="card">
    <!-- /.card-header -->
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title">LIST SONG</h3>
        <a href="{{route('song.create')}}" class="btn btn-primary">ADD SONG</a>
    </div>
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr class="text-center">
          <th>No</th>
          <th>ID SONG</th>
          <th>TITLE</th>
          <th>ARTIST</th>
          <th>AUDIO FILE</th>
          <th>ACTION</th>
        </tr>
        </thead>
        @foreach ($data as $kmr )
        <tbody>
        <td><center>{{$loop->iteration}}</center></td>
        <td><center>{{$kmr->id_song}}</center></td>
        <td><center>{{$kmr->title}}</center></td>
        <td><center>{{$kmr->artist}}</center></td>
        <td><center>
            <center>
                <audio controls>
                    <source src="{{ asset('storage/' . $kmr->audio_file) }}" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </center>
        </center></td>
        <td><center>
            {{-- <a type="button" class="btn btn-warning" href="#">EDIT</a> --}}
            <form action="{{ route('song.destroy', $kmr->id_song) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </tbody>
        @endforeach
      </table>
    </div>
    <!-- /.card-body -->
  </div>



@endsection
