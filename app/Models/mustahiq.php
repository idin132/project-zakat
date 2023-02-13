<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mustahiq extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_mustahiq';
    protected $table = "mustahiq";
    protected $fillable = [
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
        return $this->hasMany(penerimaan::class, 'id_mustahiq');
    } 
}
