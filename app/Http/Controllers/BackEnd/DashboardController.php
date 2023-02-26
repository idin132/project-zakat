<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\mustahiq;
use App\Models\pembayaran;
use App\Models\penerimaan;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $mustahiqs = mustahiq::count(); // total mustahiq //
        $muzakkis = User::count(); // total user/muzakki //
        $penerimaan = penerimaan::count(); // total penerimaan ke mustahiq //
        $pembayaran = pembayaran::count(); // total pembayaran dari muzakki //
        $total_donasi = pembayaran::sum('jumlah'); 
        $total_fitrah = pembayaran::where('nama_zakat', 'Zakat Fitrah')->sum('jumlah');
        $total_tersalurkan_fitrah = penerimaan::where('jenis_zakat', 'Zakat Fitrah')->sum('jumlah');
        $total_penghasilan = pembayaran::where('nama_zakat', 'Zakat Penghasilan')->sum('jumlah');
        $total_tersalurkan_penghasilan = penerimaan::where('jenis_zakat', 'Zakat Penghasilan')->sum('jumlah');
        // $total_donasi_disetujui = pembayaran::where('status', '0')->sum('jumlah');
        $results = DB::table('pembayaran')->select(DB::raw("CALL JumlahZakat()"))->where('status', '0')->sum('jumlah'); // Procedure //
        $total_tersalurkan = penerimaan::sum('jumlah');
        return view('BackEnd.dashboard', compact('total_tersalurkan_penghasilan','total_tersalurkan_fitrah','total_fitrah','total_penghasilan','mustahiqs','results','muzakkis', 'penerimaan', 'pembayaran', 'total_tersalurkan'));
    }

}
