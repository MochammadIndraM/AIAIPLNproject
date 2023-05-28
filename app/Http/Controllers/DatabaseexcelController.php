<?php

namespace App\Http\Controllers;

use App\Models\databaseexcel;
use App\Models\surat;
use App\Models\surat_detail;

use App\Imports\DatabaseImport;
use Maatwebsite\Excel\Facades\Excel;
// use App\Http\Controllers\DatabaseexcelController;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;



class DatabaseexcelController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function uploadexcel(Request $request)
    {

        try {
            $currentDate = date('dmY');
            $unitCode = '2111';

            // Retrieve the latest surat record for the current date
            $latestSurat = surat::whereDate('tanggal', '=', Carbon::now()->format('Y-m-d'))->orderBy('tanggal', 'desc')->first();

            // Check if a record exists for the current date
            if ($latestSurat) {
                // Increment the last 4 digits of the latest surat's no_berita_acara
                $lastNumber = (int)substr($latestSurat->no_berita_acara, 0, 4);
                $beritaacara = sprintf('%04d', $lastNumber + 1) . $unitCode . $currentDate;
            } else {
                // No record exists for the current date, start from '0001'
                $firstNumber = 1;
                $beritaacara = sprintf('%04d', $firstNumber) . $unitCode . $currentDate;
            }


            surat::create([
                'no_berita_acara' => $beritaacara,
                'tanggal' => carbon::now(),
                'unit_induk' => $request->unitinduk,
                'up3' => $request->up3,
                'ulp' => $request->ulp,
                'nama_pengirim' => $request->namapengirim,
                'catatan' => $request->catatan,
                'verifikasi_mulp' => 'Menunggu',
                'verifikasi_mup3' => 'Menunggu',
                'verifikasi_pabrik' => 'Menunggu',
                'diterima_digudang' => 'Menunggu',
                'surat_balasan' => 'Menunggu',
                'proses_packing' => 'Menunggu',
                'proses_kirim' => 'Menunggu',

            ]);

            Excel::import(new DatabaseImport($beritaacara, $request->tanggal, $request->unitinduk, $request->up3, $request->ulp, $request->namapengirim, $request->catatan), request()->file('filepond'));

            Alert::success('Berhasil', 'Berhasil Menambah Data');
            return redirect('/pengiriman-surat');
        } catch (\Exception $e) {
            Alert::error('Gagal', 'Gagal Mengunggah File');
            return redirect('/pengiriman-surat');
        }
    }


    public function penerimaansurat(Request $request)
    {

        $surat = surat::with('surat_detail')->where('verifikasi_mulp', '=', 'Menunggu')->orWhere('verifikasi_mup3', '=', 'Menunggu')->orWhere('verifikasi_pabrik', '=', 'Menunggu')
            ->get();
        // dd($surat);
        return view('layout.penerimaan_surat')->with('surat', $surat);
    }

    public function klaimgaransi(Request $request)
    {
        $surat = surat::all();
        // dd($surat);
        return view('layout.proses_klaimgaransi', compact('surat'));
    }

    public function setujuiulp(Request $request)
    {
        $update = surat::find($request->no_berita_acara);

        $update->verifikasi_mulp = 'Disetujui';
        $update->diterima_digudang = 'Diterima';

        $update->save();
        Alert::success('Berhasil', 'Berhasil Menyetujui Data');
        return redirect('/penerimaan-surat');
    }
    public function tolakulp(Request $request)
    {
        $update = surat::find($request->no_berita_acara);

        $update->verifikasi_mulp = 'Ditolak';
        $update->diterima_digudang = 'Belum Diterima';

        $update->save();
        Alert::success('Berhasil', 'Berhasil Menolak Data');
        return redirect('/penerimaan-surat');
    }
    public function setujuiup3(Request $request)
    {
        $update = surat::find($request->no_berita_acara);

        $update->verifikasi_mup3 = 'Disetujui';
        $update->save();
        Alert::success('Berhasil', 'Berhasil Menyetujui Data');
        return redirect('/penerimaan-surat');
    }
    public function tolakup3(Request $request)
    {
        $update = surat::find($request->no_berita_acara);

        $update->verifikasi_mup3 = 'Ditolak';
        $update->save();
        Alert::success('Berhasil', 'Berhasil Menolak Data');
        return redirect('/penerimaan-surat');
    }
    public function setujuipabrik(Request $request)
    {
        $update = surat::find($request->no_berita_acara);

        $update->verifikasi_pabrik = 'Disetujui';
        $update->surat_balasan = 'Diterima';

        $update->save();
        Alert::success('Berhasil', 'Berhasil Menyetujui Data');
        return redirect('/penerimaan-surat');
    }
    public function tolakpabrik(Request $request)
    {
        $update = surat::find($request->no_berita_acara);

        $update->verifikasi_pabrik = 'Ditolak';
        $update->save();
        Alert::success('Berhasil', 'Berhasil Menolak Data');
        return redirect('/penerimaan-surat');
    }
}
