<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\muzakki;
use Illuminate\Http\Request;
use App\Models\verif;
use App\Models\zakat;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PembayaranExport;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;


class VerifikasiController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $verifikasi = verif::all();
        return view('BackEnd.pembayaran.verifikasi', compact('verifikasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $pembayarans = pembayaran::find($id);
        $pembayarans->delete();
        return to_route('pembayaran.index')->with('hapus data berhasil>');
    }

    public function status($id)
    {
        $pembayarans = pembayaran::where('id', $id)->first();
        $status = $pembayarans->status;

        if ($status == 1) {
            pembayaran::where('id', $id)->update([
                'status' => 0
            ]);
        } else {
            pembayaran::where('id', $id)->update([
                'status' => 1
            ]);
        }
        return back()->with('pesan', 'status sudah diupdate');
    }

    public function export()
    {
        return Excel::download(new PembayaranExport, 'pembayaran.xlsx');
    }

    public function pembayaran(Request $request)
    {
        // $sum_jumlah = pembayaran::sum('jumlah');
        $tgl_masuk = $request->tgl_masuk;
        $tgl_selesai = $request->tgl_selesai;
        $data = pembayaran::whereBetween('created_at', [$tgl_masuk, $tgl_selesai])->get();
        $sum_jumlah = pembayaran::whereBetween('created_at', [$tgl_masuk, $tgl_selesai])->sum('jumlah');
        return view('BackEnd.laporan.pembayaran', compact('data', 'tgl_masuk', 'tgl_selesai','sum_jumlah'));
    }

    

}
