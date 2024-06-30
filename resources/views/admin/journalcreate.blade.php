@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Jurnal</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ route('journal.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="namapenulis">Nama Penulis</label>
                                <input type="text" class="form-control" id="namapenulis" name="namapenulis"
                                    placeholder="Masukkan nama penulis">
                            </div>
                            <div class="form-group">
                                <label for="file">File PDF</label>
                                <input type="file" class="form-control" id="file" name="file"
                                    accept="application/pdf">
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('journal.index') }}" class="btn btn-secondary">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
