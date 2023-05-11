@extends('app.head')
@section('title')
    Laporan Data
@endsection
@section('pageheading')
    Laporan Data
@endsection
@section('monitoring')
    active
@endsection
@section('konten')
    <div class="page-content">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row align-items-center">
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="col-form-label">Jenis</label>
                                </div>
                                <div class="col-md-1">
                                    <label class="col-form-label">:</label>
                                </div>
                                <div class="col-md-8">
                                    <fieldset class="form-group">
                                        <select class="form-select" id="basicSelect">
                                            <option></option>
                                            <option>Prabayar</option>
                                            <option>Pascabayar</option>
                                        </select>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group row align-items-center">
                            <div class="col-md-2 offset-2">
                                <label class="col-form-label">UP3</label>
                            </div>
                            <div class="col-md-1">
                                <label class="col-form-label">:</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" id="last-name" class="form-control" name="fname"
                                    placeholder="Pontianak">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row align-items-center">
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="col-form-label">Unit Induk</label>
                                </div>
                                <div class="col-md-1">
                                    <label class="col-form-label">:</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="d-flex gap-5 justify-content-space-between">
                                        <input type="text" id="last-name" class="form-control" name="fname"
                                    placeholder="Kalimantan Barat">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row align-items-center">
                            <div class="col-md-2 offset-2">
                                <label class="col-form-label">UL3</label>
                            </div>
                            <div class="col-md-1">
                                <label class="col-form-label">:</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" id="last-name" class="form-control" name="fname"
                                    placeholder="Menpawah">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row align-items-center">
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="col-form-label">Waktu</label>
                                </div>
                                <div class="col-md-1">
                                    <label class="col-form-label">:</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="d-flex gap-5 justify-content-space-between">
                                        <input type="date" id="first-name" class="form-control" name="fname"
                                            placeholder="First Name">
                                        <label class="col-form-label">s/d</label>
                                        <input type="date" id="first-name" class="form-control" name="fname"
                                            placeholder="First Name">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>Tanggal Pendataan</th>
                                <th>No Meter</th>
                                <th>Jenis Kerusakan</th>
                                <th>Tahun Buat</th>
                                <th>Tahun Ganti</th>
                                <th>Jenis</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>06-05-2023</td>
                                <td>000127032023</td>
                                <td>Disetujui</td>
                                <td>Diterima</td>
                                <td>Disetujui</td>
                                <td>Garansi</td>

                            </tr>
                            <tr>
                                <td>06-05-2023</td>
                                <td>000127032023</td>
                                <td>Tidak</td>
                                <td>Belum Diterima</td>
                                <td>Tidak</td>
                                <td> Tidak Garansi</td>

                            </tr>
                            <tr>
                                <td>06-05-2023</td>
                                <td>000127032023</td>
                                <td>Disetujui</td>
                                <td>Diterima</td>
                                <td>Disetujui</td>
                                <td>Garansi</td>

                            </tr>
                            <tr>
                                <td>06-05-2023</td>
                                <td>000127032023</td>
                                <td>Tidak</td>
                                <td>Belum Diterima</td>
                                <td>Tidak</td>
                                <td>Tidak Garansi</td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-body">
            <div class="d-flex justify-content-end">
            <div class="buttons">
                <a href="#" class="btn btn-primary">Cetak</a>
                </div>
                    </div>
            </div>
        </div>

    </div>
@endsection
