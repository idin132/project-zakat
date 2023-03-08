<?php

namespace App\Models;

//Package
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

//Inheritansi
class mustahiq extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_mustahiq';
    protected $table = "mustahiq";
    //Enkapsulasi
    protected $fillable = [ // Array
        'id_mustahiq',
        'nik',
        'nama_mustahiq',
        'jenis_kelamin',
        'tgl_lahir', 
         'alamat',
         'agama',
         'pekerjaan',
         'penghasilan',
         'jumlah_anak',
         'ashnaf',
    ];

    public function penerimaan(){
        //Polimorfisme
        return $this->hasMany(penerimaan::class, 'id_mustahiq');
    } 
}
