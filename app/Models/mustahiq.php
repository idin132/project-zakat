<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mustahiq extends Model
{
    use HasFactory;
    protected $table = "mustahiq";
    protected $fillable = [
        'nama_mustahiq',
        'tgl_lahir', 
         'usia',
         'alamat',
         'agama',
         'pekerjaan',
         'jumlah_anak',
         'ashnaf',
    ];

    public function mustahiq(){
        return $this->belongsTo('App\Models\mustahiq');
    } 
}
