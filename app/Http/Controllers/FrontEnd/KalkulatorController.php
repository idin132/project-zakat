<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Models\zakat;
use App\Http\Controllers\Controller;
use App\Models\pembayaran;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class KalkulatorController extends Controller
{
    public function index()
    {
        $kalkulator = pembayaran::all();
        return view('FrontEnd.zakat.index', compact('kalkulator'));
    }

    public function show()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_zakat',
            'jumlah',
            'bukti_pembayaran',
        ]);

        // $image = $request->file('bukti_pembayaran');
        // $image->storeAs('public/foto', $image->hashName());


        $fitrah = pembayaran::create([
            'nama_zakat' => $request->nama_zakat,
            'nama_muzakki',
            'jumlah' => $request->jumlah,
            'metode_pembayaran',
            'bukti_pembayaran',

        ]);

        return redirect()->route('kalkulator.edit', $fitrah->id);
    }

    public function edit($id)
    {
        $user = User::find(Auth::user()->id);
        $fitrah = pembayaran::where('id', $id)->first();
        return view('FrontEnd.pembayaran.fitrah', [
            "fitrah" => $fitrah,
            "user" => $user,
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_zakat',
            'nama_muzakki',
            'no_hp',
            'email',
            'jumlah',
            'metode_pembayaran',
            'bukti_pembayaran',
        ]);

        $fitrah = pembayaran::where('id', $id)->first();

        if ($request->file('bukti_pembayaran') == "") {

            $fitrah->update([
                'nama_zakat' => $request->nama_zakat,
                'nama_muzakki' => $request->nama_muzakki,
                'no_hp' => $request->no_hp,
                'email' => $request->email,
                'jumlah' => $request->jumlah,
                'metode_pembayaran' => $request->metode_pembayaran


            ]);
        } else {
            Storage::disk('local')->delete('public/foto/' . $fitrah->bukti_pembayaran);

            $image = $request->file('bukti_pembayaran');
            $image->storeAs('public/foto', $image->hashName());

            $fitrah->update([
                'bukti_pembayaran' => $image->hashName(),
                'nama_zakat' => $request->nama_zakat,
                'nama_muzakki' => $request->nama_muzakki,
                'no_hp' => $request->no_hp,
                'email' => $request->email,
                'jumlah' => $request->jumlah,
                'metode_pembayaran' => $request->metode_pembayaran
            ]);


            // $fitrah = pembayaran::where('id', $id);
            // $fitrah->update($request->except('_token', '_method'));
            return redirect()->route('selesai');
        }
    }
}
