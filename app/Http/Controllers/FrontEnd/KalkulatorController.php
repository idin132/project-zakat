<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Models\zakat;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class KalkulatorController extends Controller
{
    public function index()
    {
        $kalkulator = zakat::all();
        return view('FrontEnd.zakat.index', compact('kalkulator'));
    }

    public function create()
    {
        $kalkulator = zakat::all();

        return view('FrontEnd.zakat.index', [
            'zakat' => $kalkulator, compact('kalkulator'),
        ]);
    }

    public function show()
    {
        $penghasilan = zakat::all();
        return view('FrontEnd.zakat.penghasilan', compact('penghasilan'));
    }

    public function createPenghasilan()
    {
        $penghasilan = zakat::all();

        return view('FrontEnd.zakat.penghasilan', [
            'zakat' => $penghasilan, compact('penghasilan'),
        ]);
    }

    // public function create()
    // {
    //     $total = penerimaan::sum('jumlah');
    //     $penerimaan = penerimaan::all();
    //     $mustahiq = mustahiq::all();

    //     return view('BackEnd.penerimaan.create', [
    //         'penerimaan' => $penerimaan, compact('total', 'mustahiq'),
    //         'mustahiq' => $mustahiq,
    //     ]);
    // }

    public function store(Request $request)
    {
    }
}
