<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class KelurahanController extends Controller
{
    public function profillurah(){
        $nama = "Bang Jago";
        $nip = "0321 12345678";
        $jabatan = "Lurah";

        return view('pejabatprofil',[
            'nama' => $nama,
            'nip' => $nip,
            'jabatan' => $jabatan
        ]);
    }
}
