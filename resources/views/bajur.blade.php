@extends('layouts.app')

@section('style')
    <!-- Tambahkan stylesheet khusus jika diperlukan -->
    <link rel="stylesheet" href="listmusic.css">
@endsection

@section('content')
    <div class="container">
        <!-- Navbar atau bagian lain yang sesuai -->
    </div>

    <main class="py-4">
        <section class="listmusic" id="listmusic">
            <div class="listmusic-container">
                <div class="heading">
                    <h2>Baca Jurnal</h2>
                </div>

                @foreach ($data as $journal)
                <div class="music-container">
                    <div class="box">
                        <div class="img-music">
                            <!-- Placeholder untuk gambar jurnal -->
                        </div>
                        <div class="music-info">
                            <h5 class="music-title">{{ $journal->namapenulis }}</h5>
                            {{-- <p class="music-subtitle">{{ $journal->file }}</p> --}}
                        </div>
                        <div class="play-icon">
                            <a href="#" onclick="showPDF('{{ asset('storage/' . $journal->file) }}')" class="btn">Read</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </section>
    </main>

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
@endsection

@section('script')
    {{-- Pastikan jQuery telah dimuat sebelum script ini --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function showPDF(pdfUrl) {
            $('#pdfViewer').attr('src', pdfUrl);
            $('#pdfModal').modal('show');
        }

        // Mengatur ulang iframe saat modal ditutup
        $('#pdfModal').on('hidden.bs.modal', function () {
            $('#pdfViewer').attr('src', '');
        });
    </script>
@endsection
