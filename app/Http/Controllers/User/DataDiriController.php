<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Pendaftaran, CalonSiswa, TahunAjaranAktif};
use Session;

class DataDiriController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $calon_siswa = CalonSiswa::where('user_id', auth()->user()->id)->first();
        
        $pendaftaran = Pendaftaran::where('siswa_id', $calon_siswa->id)->first();
        $tahun_ajaran_aktif = TahunAjaranAktif::first();

        if (empty($pendaftaran)) {
            Pendaftaran::create([
                'siswa_id' => $calon_siswa->id,
                'tahun_ajaran' => $tahun_ajaran_aktif->tahun_ajar,
                'jalur' => 'Reguler',
                'status' => 'Menunggu',
            ]);
        }

        return view('apps.user.data_diri.index')->with('calon_siswa', $calon_siswa)->with('pendaftaran', $pendaftaran);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $calon_siswa = CalonSiswa::findOrFail($request->id); 
        $data = $request->all();

        $calon_siswa->update($data);

        Session::flash('flash_message', 'Data telah diubah');
        return redirect()->route('user.data_diri');
    }
}
