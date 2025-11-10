<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Pendaftaran, CalonSiswa};

class PengumumanHasilController extends Controller
{
    public function index(){
        $calon_siswa = CalonSiswa::where('user_id', auth()->user()->id)->first();
        $pendaftaran = Pendaftaran::where('siswa_id', $calon_siswa->id)->first();

        return view('apps.user.pengumuman_hasil.index')->with('pendaftaran', $pendaftaran);
    }
}
