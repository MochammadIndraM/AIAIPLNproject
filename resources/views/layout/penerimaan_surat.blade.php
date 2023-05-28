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
                                <th>ULP</th>
                                <th>Nama Pengirim</th>
                                <th>Catatan</th>
                                <th>Verifikasi ULP</th>
                                <th>Verfikasi UP3</th>
                                <th>Verfikasi UP3</th>
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
                                    @if (Auth::user()->role == 'admin' or
                                            Auth::user()->role == 'Manager ULP' or
                                            Auth::user()->role == 'Manager UP3' or
                                            Auth::user()->role == 'Pihak Pabrik')
                                        <td>
                                            {{ $item->verifikasi_mulp }}
                                        </td>
                                        <td>
                                            {{ $item->verifikasi_mup3 }}
                                        </td>
                                        <td>
                                            {{ $item->verifikasi_pabrik }}
                                        </td>
                                    @endif

                                    <td>
                                        <button onclick="showData({{ $item }})" class="btn icon btn-primary"
                                            data-bs-toggle="modal" data-bs-target="#editModal">
                                            Detail
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalTitle" style="display: none;"
                aria-modal="true" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
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
                            <div>
                                @if (Auth::user()->role == 'Manager ULP')
                                    <a href="/penerimaan-surat/tolakulp/" type="button" class="btn btn-danger ml-1"
                                        id="btn_tolakulp">
                                        <i class="bx bx-check d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Tolak</span>
                                    </a>
                                @endif
                                @if (Auth::user()->role == 'Manager ULP')
                                    <a href="/penerimaan-surat/setujuulp/" type="button" class="btn btn-primary ml-1"
                                        id="btn_setujuiulp">
                                        <i class="bx bx-check d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Setujui</span>
                                    </a>
                                @endif
                                @if (Auth::user()->role == 'Manager UP3')
                                    <a href="/penerimaan-surat/tolakup3/" type="button" class="btn btn-danger ml-1"
                                        id="btn_tolakup3">
                                        <i class="bx bx-check d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Tolak</span>
                                    </a>
                                @endif
                                @if (Auth::user()->role == 'Manager UP3')
                                    <a href="/penerimaan-surat/setujuup3/" type="button" class="btn btn-primary ml-1"
                                        id="btn_setujuiup3">
                                        <i class="bx bx-check d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Setujui</span>
                                    </a>
                                @endif
                                @if (Auth::user()->role == 'Pihak Pabrik')
                                    <a href="/penerimaan-surat/tolakpabrik/" type="button" class="btn btn-danger ml-1"
                                        id="btn_tolakpabrik">
                                        <i class="bx bx-check d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Tolak</span>
                                    </a>
                                @endif
                                @if (Auth::user()->role == 'Pihak Pabrik')
                                    <a href="/penerimaan-surat/setujupabrik/" type="button" class="btn btn-primary ml-1"
                                        id="btn_setujuipabrik">
                                        <i class="bx bx-check d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Setujui</span>
                                    </a>
                                @endif
                            </div>

                        </div>
                        <div class="modal-body">
                            <div class="form-body">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th>No Meter</th>
                                                <th>Kriteria Garansi</th>
                                                <th>Gangguan</th>
                                                <th>Tahun Buat</th>
                                                <th>Tahun Ganti</th>
                                            </tr>
                                        </thead>
                                        <tbody id="datakonten">
                                            {{-- ada di JS bawah --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    const showData = (item) => {
        console.log(item);
        var kontenhtml = "";
        item.surat_detail.forEach(element => {
            kontenhtml += '<tr>';
            kontenhtml += '<td>' + element.no_meter + '</td>';
            kontenhtml += '<td>' + element.kriteria_garansi + '</td>';
            kontenhtml += '<td>' + element.gangguan + '</td>';
            kontenhtml += '<td>' + element.tahun_buat + '</td>';
            kontenhtml += '<td>' + element.tahun_ganti + '</td>';
            kontenhtml += '</tr>';
        });
        $("#datakonten").html(kontenhtml);

        $("#btn_setujuiulp").attr('href', '/penerimaan-surat/setujuulp/' + item.no_berita_acara);
        $("#btn_tolakulp").attr('href', '/penerimaan-surat/tolakulp/' + item.no_berita_acara);
        $("#btn_setujuiup3").attr('href', '/penerimaan-surat/setujuup3/' + item.no_berita_acara);
        $("#btn_tolakup3").attr('href', '/penerimaan-surat/tolakup3/' + item.no_berita_acara);
        $("#btn_setujuipabrik").attr('href', '/penerimaan-surat/setujupabrik/' + item.no_berita_acara);
        $("#btn_tolakpabrik").attr('href', '/penerimaan-surat/tolakpabrik/' + item.no_berita_acara);
    }
</script>
