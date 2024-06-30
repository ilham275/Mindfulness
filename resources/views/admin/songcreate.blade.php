@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">ADD SONGS</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="{{ route('song.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Judul Lagu</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan judul lagu">
                        </div>
                        <div class="form-group">
                            <label for="artist">Artis</label>
                            <input type="text" class="form-control" id="artist" name="artist" placeholder="Masukkan nama artis">
                        </div>
                        <div class="form-group">
                            <label for="audio_file">File Audio</label>
                            <input type="file" class="form-control" id="audio_file" name="audio_file" accept="audio/*">
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary float-right">{{ __('Submit') }}</button>
                    </div>
                </form>
                <a href="#" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
