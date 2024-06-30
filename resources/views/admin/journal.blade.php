@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title">Daftar Jurnal</h3>
        <a href="{{ route('journal.create') }}" class="btn btn-primary">Tambah Jurnal</a>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>ID Jurnal</th>
                    <th>Nama Penulis</th>
                    <th>File PDF</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $journal)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $journal->id_journal }}</td>
                    <td>{{ $journal->namapenulis }}</td>
                    <td>
                        <a href="#" onclick="showPDF('{{ asset('storage/' . $journal->file) }}')">Lihat PDF</a>
                    </td>
                    <td class="text-center">
                        <form action="{{ route('journal.destroy', $journal->id_journal) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus jurnal ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>

<!-- Modal untuk Popup PDF -->
<div class="modal fade" id="pdfModal" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pdfModalLabel">PDF Viewer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe id="pdfViewer" src="" style="width: 100%; height: 600px;" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript untuk menampilkan PDF dalam modal -->
<script>

    function showPDF(pdfUrl) {
        $('#pdfViewer').attr('src', pdfUrl);
        $('#pdfModal').modal('show');
    }
</script>
@endsection
