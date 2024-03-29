<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Models\zakat;
use App\Http\Controllers\Controller;
use App\Models\pembayaran;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PenghasilanController extends Controller
{
    public function index()
    {
        $penghasilan = pembayaran::all();
        return view('FrontEnd.zakat.penghasilan', compact('penghasilan'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_zakat',
            'jumlah',
            'bukti_pembayaran',
        ]);

        $penghasilan = pembayaran::create([
            'nama_zakat' => $request->nama_zakat,
            'nama_muzakki',
            'jumlah' => $request->jumlah,
            'metode_pembayaran',
            'bukti_pembayaran',

        ]);

        return redirect()->route('penghasilan.edit', $penghasilan->id);
    }

    public function edit($id)
    {
        $user = User::find(Auth::user()->id);
        $penghasilan = pembayaran::where('id', $id)->first();
        return view('FrontEnd.pembayaran.penghasilan', [
            "penghasilan" => $penghasilan,
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

        $penghasilan = pembayaran::where('id', $id)->first();

        if ($request->file('bukti_pembayaran') == "") {

            $penghasilan->update([
                'nama_zakat' => $request->nama_zakat,
                'nama_muzakki' => $request->nama_muzakki,
                'no_hp' => $request->no_hp,
                'email' => $request->email,
                'jumlah' => $request->jumlah,
                'metode_pembayaran' => $request->metode_pembayaran


            ]);
        } else {
            Storage::disk('local')->delete('public/foto/' . $penghasilan->bukti_pembayaran);

            $image = $request->file('bukti_pembayaran');
            $image->storeAs('public/foto', $image->hashName());

            $penghasilan->update([
                'bukti_pembayaran' => $image->hashName(),
                'nama_zakat' => $request->nama_zakat,
                'nama_muzakki' => $request->nama_muzakki,
                'no_hp' => $request->no_hp,
                'email' => $request->email,
                'jumlah' => $request->jumlah,
                'metode_pembayaran' => $request->metode_pembayaran
            ]);


            // $penghasilan = pembayaran::where('id', $id);
            // $penghasilan->update($request->except('_token','_method'));
            return redirect()->route('selesai');
        }
    }
}
