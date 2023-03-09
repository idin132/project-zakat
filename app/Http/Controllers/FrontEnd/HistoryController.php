<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\muzakki;
use Illuminate\Http\Request;
use App\Models\pembayaran;
use App\Models\zakat;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PembayaranExport;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;



class HistoryController extends Controller
{

   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $history = pembayaran::where('email', Auth::user()->email)->paginate(10);
        return view('FrontEnd.history.index', compact('history'));
    }
}