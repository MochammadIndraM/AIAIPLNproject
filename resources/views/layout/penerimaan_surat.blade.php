@extends('app.head')
@section('title')
    Penerimaan Surat
@endsection
@section('pageheading')
    Penerimaan Surat
@endsection
@section('penerimaansurat')
    active
@endsection
@section('konten')
    <div class="page-content">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>No Berita Acara</th>
                                <th>Tgl Surat</th>
                                <th>Unit Induk</th>
                                <th>UP3</th>
                                <th>ULP </th>
                                <th>Nama Pengirim</th>
                                <th>Catatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($surat as $item)
                                <tr>
                                    <td>
                                        {{ $item->no_berita_acara }}
                                    </td>
                                    <td>
                                        {{ $item->tanggal }}
                                    </td>
                                    <td>
                                        {{ $item->unit_induk }}
                                    </td>
                                    <td>
                                        {{ $item->up3 }}
                                    </td>
                                    <td>
                                        {{ $item->ulp }}
                                    </td>
                                    <td>
                                        {{ $item->nama_pengirim }}
                                    </td>
                                    <td>
                                        {{ $item->catatan }}
                                    </td>
                                    <td>
                                        <div class="buttons">
                                            <a href="{{route('detail_surat', $item->no_berita_acara)}}" class="btn icon btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#editModal"><i class="bi bi-pencil-fill"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalTitle" style="display: none;"
            aria-modal="true" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                        <button type="submit" class="btn btn-primary ml-1" id="btn_upload">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Setujui</span>
                        </button>

                    </div>
                    <div class="modal-body">
                        <form class="form form-horizontal" action="/masteruser-web/update" method="POST"
                            enctype="multipart/form-data" data-parsley-validate>
                            @csrf
                            <div class="form-body">

                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th>No Meter</th>
                                                <th>Kriteria Garansi</th>
                                                <th>Gangguan</th>
                                                <th>Tahun Buat </th>
                                                <th>Tahun Ganti</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($surat as $item)
                                                <tr>
                                                    <td>
                                                        {{ $item->no_berita_acara }}
                                                    </td>
                                                    <td>
                                                        {{ $item->kriteria_garansi }}
                                                    </td>
                                                    <td>
                                                        {{ $item->gangguan }}
                                                    </td>
                                                    <td>
                                                        {{ $item->tahun_buat }}
                                                    </td>
                                                    <td>
                                                        {{ $item->tahun_ganti }}
                                                    </td>


                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </div>
@endsection
