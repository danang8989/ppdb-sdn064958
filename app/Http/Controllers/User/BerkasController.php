<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Berkas, CalonSiswa};
use Session;

class BerkasController extends Controller
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
        
        $berkas = Berkas::where('siswa_id', $calon_siswa->id)->get();

        return view('apps.user.berkas.index')->with('calon_siswa', $calon_siswa)->with('berkas', $berkas);
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
        $calon_siswa = CalonSiswa::where('user_id', auth()->user()->id)->first();

        if ($request->has('berkas')) {
            foreach ($request->file('berkas') as $jenis => $image) {
                if ($image) {
                    $file_name = $image->getClientOriginalName();
                    $destinationPath = 'img_assets/berkas';
                    $image->move($destinationPath, $file_name);

                    // Simpan atau update data berkas
                    Berkas::updateOrCreate(
                        [
                            'siswa_id' => $calon_siswa->id,
                            'jenis_berkas' => $jenis,
                        ],
                        [
                            'path' => 'img_assets/berkas/' . $file_name,
                            'nama_berkas' => $file_name,
                        ]
                    );
                }
            }
        }

        Session::flash('flash_message', 'Data telah diubah');
        return redirect()->route('user.berkas');
    }
}
