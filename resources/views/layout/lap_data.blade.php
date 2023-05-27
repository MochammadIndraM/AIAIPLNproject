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
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>NOMER METER</th>
                                <th>KRITERIA GARANSI</th>
                                <th>GANGGUAN</th>
                                <th>TAHUN BUAT</th>
                                <th>TAHUN GANTI</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($crudmasterdata as $item)
                                <tr>
                                    <td>
                                        {{ $item->no_meter }}
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
                <form action="{{route('export')}}" method="POST">
                    @csrf
                    <div class="d-flex justify-content-end">
                        <button class="btn icon btn-primary">
                            Cetak
                        </button>
                    </div>
                </form>
        </div>

    </div>
@endsection
