<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penerimaan extends Model
{
    use HasFactory;
    protected $table = "penerimaan";
    protected $fillable = [
        'id_mustahiq',
        'alamat',
        'jenis_zakat',
        'jumlah',
        'bukti',

    ];
    public function mustahiq()
    {
        return $this->belongsTo(mustahiq::class, 'id_mustahiq');
    }
}
