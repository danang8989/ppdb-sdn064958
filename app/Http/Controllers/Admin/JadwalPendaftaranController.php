<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{JadwalPendaftaran};
use Session;

class JadwalPendaftaranController extends Controller
{
    public function index(){
        $jadwal_pendaftaran = JadwalPendaftaran::first();

        if (empty($jadwal_pendaftaran)) {
            $jadwal_pendaftaran = JadwalPendaftaran::create([
                'jadwal_penutupan' => '2025/10/10',
                'jadwal_pembukaan' => '2025/10/10',
                'jadwal_seleksi' => '2025/10/10',
            ]);
        }

        return view('apps.admin.jadwal_pendaftaran.index')->with('jadwal_pendaftaran', $jadwal_pendaftaran);
    }

    public function update(Request $request){
        $jadwal_pendaftaran = JadwalPendaftaran::findOrFail($request->id);

        $jadwal_pendaftaran->update($request->all());

        return redirect()->back();
    }
}
