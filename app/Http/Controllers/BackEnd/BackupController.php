<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

class BackupController extends Controller
{
    Public function index(){
        return view('BackEnd.backup.index');
    }

    Public function create(){
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
