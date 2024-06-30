@extends('layouts.admin')
@section('content')

<div class="card">
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr class="text-center">
          <th>No</th>
          <th>ID USER</th>
          <th>NAME</th>
          <th>EMAIL</th>
          <th>ROLE</th>
          {{-- <th>Action</th> --}}
        </tr>
        </thead>
        @foreach ($data as $kmr )
        <tbody>
        <td><center>{{$loop->iteration}}</center></td>
        <td><center>{{$kmr->id}}</center></td>
        <td><center>{{$kmr->name}}</center></td>
        <td><center>{{$kmr->email}}</center></td>
        <td><center>{{$kmr->role}}</center></td>

        </tbody>
        @endforeach
      </table>
    </div>
    <!-- /.card-body -->
  </div>



@endsection
