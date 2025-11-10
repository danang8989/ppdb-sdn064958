<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Berkas, CalonSiswa};

class BerkasController extends Controller
{
    public function index(){
        $calon_siswa = CalonSiswa::orderBy('id', 'desc')->limit(10);

        $calon_siswa = $calon_siswa->simplePaginate(15);
        
        return view('apps.admin.berkas.index')->with('calon_siswa', $calon_siswa);
    }
}
