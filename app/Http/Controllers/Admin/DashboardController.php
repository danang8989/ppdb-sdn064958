<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Pendaftaran, CalonSiswa, TahunAjaranAktif};

class DashboardController extends Controller
{
    public function index(){
        $tahun_ajaran_aktif = TahunAjaranAktif::first();
        $pendaftaran = Pendaftaran::where('tahun_ajaran', $tahun_ajaran_aktif->tahun_ajar)->orderBy('id', 'desc')->limit(10)->get();
        $jumlah_pendaftar = Pendaftaran::where('tahun_ajaran', $tahun_ajaran_aktif->tahun_ajar)->count();
        $jumlah_lulus = Pendaftaran::where('status', 'diterima')->where('tahun_ajaran', $tahun_ajaran_aktif->tahun_ajar)->count();
        $jumlah_tidak_lulus = Pendaftaran::where('status', 'ditolak')->where('tahun_ajaran', $tahun_ajaran_aktif->tahun_ajar)->count();

        return view('apps.admin.dashboard')->with('jumlah_pendaftar', $jumlah_pendaftar)
                                           ->with('jumlah_lulus', $jumlah_lulus)
                                           ->with('pendaftaran', $pendaftaran)
                                           ->with('jumlah_tidak_lulus', $jumlah_tidak_lulus);
    }
}
