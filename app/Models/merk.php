<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class merk extends Model
{
    use HasFactory;
    protected $table = 'tbl_merk';
    protected $fillable = [
        'merk'
    ];

    public function mobil(){
        return $this->hasOne(mobil::class);
    }


}
