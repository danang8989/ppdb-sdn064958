<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{CalonSiswa, TahunAjaranAktif, Pendaftaran};
use Session;

class CalonSiswaController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q_nama = $request->q_nama;
        $q_kk = $request->q_kk;
        
        $tahun_ajaran_aktif = TahunAjaranAktif::first();
        $pendaftaran = Pendaftaran::where('tahun_ajaran', $tahun_ajaran_aktif->tahun_ajar)->orderBy('id', 'desc')->limit(10);

        if (!empty($q_nama)) {
            $calon_siswa->whereIn('siswa_id', function($query) use($q_nama){
                $query->select('id')->from('calon_siswas')->where('nama_lengkap', $q_nama);
            });
        }

        if (!empty($q_kk)) {
            $calon_siswa->whereIn('siswa_id', function($query) use($q_nama){
                $query->select('id')->from('calon_siswas')->where('no_kk', $q_kk);
            });
        }

        $pendaftaran = $pendaftaran->simplePaginate(15);

        return view('apps.admin.calon_siswa.index')->with('pendaftaran', $pendaftaran)
                                                ->with('q_nama', $q_nama)
                                                ->with('q_kk', $q_kk);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CalonSiswa $calon_siswa)
    {

        return view('apps.admin.calon_siswa.edit')->with('calon_siswa', $calon_siswa);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $calon_siswa = CalonSiswa::findOrFail($request->id); 
        $pendaftaran = Pendaftaran::where('siswa_id', $calon_siswa->id)->first();

        $pendaftaran->update(['status' => $request->status]);

        Session::flash('flash_message', 'Data telah diubah');
        return redirect()->route('admin.calon_siswa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        $calon_siswa = CalonSiswa::findOrFail($request->id);
        $calon_siswa->delete();
        
        return redirect()->back();
    }
}
