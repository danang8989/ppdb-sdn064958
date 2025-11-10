<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{CalonSiswa, OrangTua};
use Session;

class OrangTuaController extends Controller
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
        $orang_tua = OrangTua::where('siswa_id', $calon_siswa->id)->first();

        if (empty($orang_tua)) {
            $orang_tua = OrangTua::create([
                'siswa_id' => $calon_siswa->id,
                'nama_ayah' => null,
                'nik_ayah' => null,
                'pekerjaan_ayah' => null,
                'pendidikan_ayah' => null,
                'nama_ibu' => null,
                'nik_ibu' => null,
                'pekerjaan_ibu' => null,
                'pendidikan_ibu' => null,
                'no_hp_orangtua' => null,
                'nama_wali' => null,
                'hubungan_wali' => null,
            ]);
        }
        
        return view('apps.user.orang_tua.index')->with('orang_tua', $orang_tua);
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
        $orang_tua = OrangTua::findOrFail($request->id); 
        $data = $request->all();

        $orang_tua->update($data);

        Session::flash('flash_message', 'Data telah diubah');
        return redirect()->route('user.orang_tua');
    }
}
