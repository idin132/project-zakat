<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Models\log;
use App\Http\Controllers\Controller;

class LogController extends Controller
{
    public function index()
    {
        $log = log::all();
        return view('BackEnd.log.index', compact('log'));
    }
}
