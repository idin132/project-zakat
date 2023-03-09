<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\pembayaran;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Response;
class LaporanController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $muzakkis = User::all();
        return view('BackEnd.laporan.muzakki', compact('muzakkis'));
    }

    public function pembayaran(Request $request)
    {
        $tgl_masuk = $request->tgl_masuk;
        $tgl_selesai = $request->tgl_selesai;
        if($tgl_masuk){
            $tgl_masuk = pembayaran::all()->where('created_at', [$tgl_masuk,$tgl_selesai]);

            $sum_jumlah = pembayaran::where('created_at')->sum('jumlah');
        }else{
            $tgl_masuk = pembayaran::all();
        }
        return view('BackEnd.laporan.pembayaran', compact('tgl_masuk', 'tgl_selesai'));
    }

    public function filter(Request $request)
    {
        {
            $start_date = $request->start_date;
            $end_date = $request->end_date;
            
            $data = pembayaran::when($start_date, function ($query) use ($start_date, $end_date) {
                return $query->whereBetween('created_at', [$start_date, $end_date]);
            })->get();
            
            return view('BackEnd.pembayaran.index', compact('data'));
        }
    }

    public function backup(){
        Artisan::queue('backup:run --only-db');
        $path = Storage::disk('backup_db')->path('/Laravel/*');
        $latest_ctime = 0;
        $latest_filename='';
        $files = glob($path);
        foreach($files as $file) {
            if (is_file($file) && filectime($file)>$latest_ctime) {
                $latest_ctime = filectime($file);
                $latest_filename = $file;
            }
        }

        return Response::download($latest_filename);
    }
}
