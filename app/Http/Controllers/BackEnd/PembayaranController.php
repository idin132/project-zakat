<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Models\pembayaran;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PembayaranExport;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;


class PembayaranController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pembayarans = pembayaran::all();
        return view('BackEnd.pembayaran.index', compact('pembayarans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('BackEnd.pembayaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_zakat' => 'required',
            'nama_muzakki' => 'required',
            'no_hp',
            'email',
            'jumlah' => 'required',
            'metode_pembayaran' => 'required',
            'bukti_pembayaran' => 'required',
        ]);

        $image = $request->file('bukti_pembayaran');
        $image->storeAs('public/foto', $image->hashName());

        $pembayarans = pembayaran::create([
            'nama_zakat' => $request->nama_zakat,
            'nama_muzakki' => $request->nama_muzakki,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'jumlah' => $request->jumlah,
            'metode_pembayaran' => $request->metode_pembayaran,
            'bukti_pembayaran' => $image->hashName(),

        ]);

        return redirect()->route('mustahiq.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $pembayaran = pembayaran::oldest('id')->simplepaginate(1);
        return view('BackEnd.pembayaran.show', compact('pembayaran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $pembayaran = pembayaran::where('id', $id)->first();
        return view('BackEnd.pembayaran.show', [
            "pembayaran" => $pembayaran,
        ]);
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
        $this->validate($request, [
            'nama_zakat' => 'required',
            'nama_muzakki' => 'required',
            'no_hp',
            'email',
            'jumlah' => 'required',
            'metode_pembayaran' => 'required',
            'bukti_pembayaran' => 'required',
        ]);
        $image = $request->file('bukti_pembayaran');
        $image->storeAs('public/foto', $image->hashName());
        $request = pembayaran::create([
            'nama_zakat' => $request->nama_zakat,
            'nama_muzakki' => $request->nama_muzakki,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'jumlah' => $request->jumlah,
            'metode_pembayaran' => $request->metode_pembayaran,
            'bukti_pembayaran' => $image->hashName(),

        ]);
        $pembayaran = pembayaran::where('id', $id);
        $pembayaran->update($request->except('_token', '_method'));
        return redirect()->route('pembayaran.index');
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
