<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Http\Controllers\DB;

class mobil extends Model
{
    use HasFactory;

    protected $table = 'tbl_mobil';
    protected $fillable = [
        'nama','warna','no_polisi','jumlah_kursi','tahun_beli','gambar'
    ];

    public function merk(){
        return $this->hasMany(merk::class);
    }
}
