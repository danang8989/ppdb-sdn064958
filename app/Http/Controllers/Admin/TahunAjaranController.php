<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TahunAjaranAktif;

class TahunAjaranController extends Controller
{
    public function index(){
        $tahun_ajaran_aktif = TahunAjaranAktif::first();

        if (empty($tahun_ajaran_aktif)) {
            $tahun_ajaran_aktif = TahunAjaranAktif::create([
                'tahun_ajar' => '2025/2026',
            ]);
        }

        return view('apps.admin.tahun_ajar.index')->with('tahun_ajaran_aktif', $tahun_ajaran_aktif);
    }

    public function update(Request $request){
        dd('tes');
        $tahun_ajaran_aktif = TahunAjaranAktif::findOrFail($request->id);

        $tahun_ajaran_aktif->update($request->all());

        return redirect()->back();
    }
}
