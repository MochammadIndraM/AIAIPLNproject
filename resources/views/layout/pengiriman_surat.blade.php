@extends('app.head')
@section('title')
    Pengiriman Surat
@endsection
@section('pageheading')
    Pengiriman Surat
@endsection
@section('pengirimansurat')
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
                <div class="d-flex justify-content-start">
                    <div class="buttons">
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#tambahModal">Upload</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- modal upload --}}
        <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalTitle" style="display: none;"
            aria-modal="true" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-lg"
                role="document">
                <div class="modal-content">
                    <form class="form form-horizontal" action="/uploadexcel" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahModalTitle">
                                Upload Data KWH
                            </h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <div class="col-lg-3 col-3">
                                                <label class="col-form-label">
                                                    <h6>No Berita Acara</h6>
                                                </label>
                                            </div>
                                            <div class="col-lg-8 col-8">
                                                <input type="text" class="form-control" id="basicInput"
                                                    placeholder="" name="beritaacara">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <div class="col-lg-3 col-3">
                                                <label class="col-form-label">
                                                    <h6>Tgl Surat</h6>
                                                </label>
                                            </div>
                                            <div class="col-lg-8 col-8">
                                                <input type="datetime-local" id="first-name" class="form-control" name="tanggal"
                                            placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <div class="col-lg-3 col-3">
                                                <label class="col-form-label">
                                                    <h6>Unit Induk</h6>
                                                </label>
                                            </div>
                                            <div class="col-lg-8 col-8">
                                                <input type="text" class="form-control" id="basicInput"
                                                    placeholder="" value="Kalimantan Barat" name="unitinduk" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <div class="col-lg-3 col-3">
                                                <label class="col-form-label">
                                                    <h6>UP3</h6>
                                                </label>
                                            </div>
                                            <div class="col-lg-8 col-8">
                                                <input type="text" class="form-control" id="basicInput"
                                                    placeholder="" value="Pontianak" name="up3" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <div class="col-lg-3 col-3">
                                                <label class="col-form-label">
                                                    <h6>UL3</h6>
                                                </label>
                                            </div>
                                            <div class="col-lg-8 col-8">
                                                <input type="text" class="form-control" id="basicInput"
                                                    placeholder="" value="Menpawah" name="ul3" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <div class="col-lg-3 col-3">
                                                <label class="col-form-label">
                                                    <h6>Nama Pengirim</h6>
                                                </label>
                                            </div>
                                            <div class="col-lg-8 col-8">
                                                <input type="text" class="form-control" id="basicInput"
                                                    placeholder="" name="namapengirim">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <div class="col-lg-3 col-3">
                                                <label class="col-form-label">
                                                    <h6>Catatan</h6>
                                                </label>
                                            </div>
                                            <div class="col-lg-8 col-8">
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="catatan"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group row align-items-center">
                                            <div class="col-lg-3 col-3     ">
                                                <label class="col-form-label">
                                                    <h6>Upload</h6>
                                                </label>
                                            </div>
                                            <div class="col-lg-8 col-8">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <!-- Basic file uploader -->
                                                        <div class="filepond--root basic-filepond filepond--hopper"
                                                            data-style-button-remove-item-position="left"
                                                            data-style-button-process-item-position="right"
                                                            data-style-load-indicator-position="right"
                                                            data-style-progress-indicator-position="right"
                                                            data-style-button-remove-item-align="false"
                                                            style="height: 76px;"><input class="filepond--browser"
                                                                type="file" id="filepond--browser-abmu7mpxy"
                                                                name="filepond"
                                                                aria-controls="filepond--assistant-abmu7mpxy"
                                                                aria-labelledby="filepond--drop-label-abmu7mpxy"
                                                                accept="">
                                                            <div class="filepond--drop-label"
                                                                style="transform: translate3d(0px, 0px, 0px); opacity: 1;">
                                                                <label for="filepond--browser-abmu7mpxy"
                                                                    id="filepond--drop-label-abmu7mpxy"
                                                                    aria-hidden="true">Drag &amp; Drop your files or <span
                                                                        class="filepond--label-action"
                                                                        tabindex="0">Browse</span></label></div>
                                                            <div class="filepond--list-scroller"
                                                                style="transform: translate3d(0px, 0px, 0px);">
                                                                <ul class="filepond--list" role="list"></ul>
                                                            </div>
                                                            <div class="filepond--panel filepond--panel-root"
                                                                data-scalable="true">
                                                                <div class="filepond--panel-top filepond--panel-root">
                                                                </div>
                                                                <div class="filepond--panel-center filepond--panel-root"
                                                                    style="transform: translate3d(0px, 8px, 0px) scale3d(1, 0.6, 1);">
                                                                </div>
                                                                <div class="filepond--panel-bottom filepond--panel-root"
                                                                    style="transform: translate3d(0px, 68px, 0px);"></div>
                                                            </div><span class="filepond--assistant"
                                                                id="filepond--assistant-abmu7mpxy" role="status"
                                                                aria-live="polite" aria-relevant="additions"></span>
                                                            <fieldset class="filepond--data"></fieldset>
                                                            <div class="filepond--drip"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Close</span>
                            </button>
                            <button type="submit" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Upload</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
