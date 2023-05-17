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
                                            <a href="#" class="btn icon btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#editModal"><i class="bi bi-pencil-fill"></i></a>
                                            <a href="#" class="btn icon btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#hapusModal"><i class="bi bi-trash-fill"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
