@extends('app.head')
@section('title')
    Proses Klaim Garansi Page
@endsection
@section('pageheading')
    Proses Klaim Garansi
@endsection
@section('monitoring')
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
                                <th>Disetujui MULP</th>
                                <th>Diterima Digudang</th>
                                <th>Disetujui MUP3</th>
                                <th>Verfikasi Pihak Pabrik</th>
                                <th>Surat Balasan</th>
                                <th>Proses Packing</th>
                                <th>Proses Kirim</th>
                                <th>Action Proses</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($surat as $item)
                                <tr>
                                    <td> {{ $item->no_berita_acara }}</td>
                                    <td> {{ $item->verifikasi_mulp }}</td>
                                    <td> {{ $item->diterima_digudang }}</td>
                                    <td> {{ $item->verifikasi_mup3 }}</td>
                                    <td> {{ $item->verifikasi_pabrik }}</td>
                                    <td> {{ $item->surat_balasan }}</td>
                                    <td> {{ $item->proses_packing }}</td>
                                    <td> {{ $item->proses_kirim }}</td>
                                    <td>
                                        <div class="btn-group sm-1">
                                            <div class="dropdown">
                                                <button onclick="showData({{ $item }})"
                                                    class="btn btn-primary dropdown-toggle me-1" type="button"
                                                    id="dropdownMenuButton{{ $item->no_berita_acara }}"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Packing
                                                </button>
                                                <div class="dropdown-menu"
                                                    aria-labelledby="dropdownMenuButton{{ $item->no_berita_acara }}"
                                                    style="">
                                                    <a class="dropdown-item"
                                                        id="btn_packing_proses{{ $item->no_berita_acara }}"
                                                        href="/proses-klaim-garansi/packingproses/{{ $item->no_berita_acara }}">Diproses</a>
                                                    <a class="dropdown-item"
                                                        id="btn_packing_selesai{{ $item->no_berita_acara }}"
                                                        href="/proses-klaim-garansi/packingselesai/{{ $item->no_berita_acara }}">Selesai</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-group sm-1">
                                            <div class="dropdown">
                                                <button onclick="showData({{ $item }})"
                                                    class="btn btn-primary dropdown-toggle me-1" type="button"
                                                    id="dropdownMenuButton2{{ $item->no_berita_acara }}"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Kirim
                                                </button>
                                                <div class="dropdown-menu"
                                                    aria-labelledby="dropdownMenuButton2{{ $item->no_berita_acara }}"
                                                    style="">
                                                    <a class="dropdown-item"
                                                        id="btn_kirim_proses{{ $item->no_berita_acara }}"
                                                        href="/proses-klaim-garansi/kirimproses/{{ $item->no_berita_acara }}">Diproses</a>
                                                    <a class="dropdown-item"
                                                        id="btn_kirim_dikirim{{ $item->no_berita_acara }}"
                                                        href="/proses-klaim-garansi/kirimdikirim/{{ $item->no_berita_acara }}">Dikirim</a>
                                                </div>
                                            </div>
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
<script>
    const showData = (item) => {

        $("#btn_packing_proses").attr('href', '/proses-klaim-garansi/packingproses/' + item.no_berita_acara);
        $("#btn_packing_selesai").attr('href', '/proses-klaim-garansi/packingselesai/' + item.no_berita_acara);
        $("#btn_kirim_proses").attr('href', '/proses-klaim-garansi/kirimproses/' + item.no_berita_acara);
        $("#btn_kirim_dikirim").attr('href', '/proses-klaim-garansi/kirimdikirim/' + item.no_berita_acara);

    }
</script>
