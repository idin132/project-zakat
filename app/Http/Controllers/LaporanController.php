<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\penerimaan;
use App\Models\mustahiq;
use App\Models\pembayaran;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\LaporanExport;

class LaporanController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mustahiqs = mustahiq::count();
        $muzakkis = User::count();
        $penerimaan = penerimaan::count();
        $pembayaran = pembayaran::count();
        $total_donasi_disetujui = pembayaran::where('status', '0')->sum('jumlah');
        $total_tersalurkan = penerimaan::sum('jumlah');
        return view('laporan.index', compact('mustahiqs','muzakkis', 'penerimaan', 'pembayaran','total_donasi_disetujui', 'total_tersalurkan'));
        
    }

    public function export()
    {
        return Excel::download(new LaporanExport, 'Laporan.xlsx');
    }

}