<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LihatNilaiControler extends Controller
{
    //
    public function dataMahasiswa(){
        $mhs1 = 'Fawwaz'; $asal1 = 'jakarta';
        $mhs2 = 'inaya'; $asal2 = 'depok';
        return view('coba.data', compact('mhs1','mhs2','asal1','asal2'));
    }
}
