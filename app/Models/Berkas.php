<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{
    protected $guarded = ['id'];

    public function getAktaKelahiranFile($siswa_id)
    {
        $berkas = Berkas::where('siswa_id', $siswa_id)
                        ->where('jenis_berkas', 'akta_kelahiran')
                        ->first();

        return !empty($berkas);
    }

    public function getKartuKeluargaFile($siswa_id)
    {
        $berkas = Berkas::where('siswa_id', $siswa_id)
                        ->where('jenis_berkas', 'kartu_keluarga')
                        ->first();

        return !empty($berkas);
    }

    public function getKtpOrtuFile($siswa_id)
    {
        $berkas = Berkas::where('siswa_id', $siswa_id)
                        ->where('jenis_berkas', 'ktp_ortu')
                        ->first();

        return !empty($berkas);
    }

    public function getSuratTkFile($siswa_id)
    {
        $berkas = Berkas::where('siswa_id', $siswa_id)
                        ->where('jenis_berkas', 'surat_tk')
                        ->first();

        return !empty($berkas);
    }

    public function getKartuImunisasiFile($siswa_id)
    {
        $berkas = Berkas::where('siswa_id', $siswa_id)
                        ->where('jenis_berkas', 'kartu_imunisasi')
                        ->first();

        return !empty($berkas);
    }

    public function getFotoAnakFile($siswa_id)
    {
        $berkas = Berkas::where('siswa_id', $siswa_id)
                        ->where('jenis_berkas', 'foto_anak')
                        ->first();

        return !empty($berkas);
    }

    public function getSuratKesehatanFile($siswa_id)
    {
        $berkas = Berkas::where('siswa_id', $siswa_id)
                        ->where('jenis_berkas', 'surat_kesehatan')
                        ->first();

        return !empty($berkas);
    }

    public function getSuratPernyataanFile($siswa_id)
    {
        $berkas = Berkas::where('siswa_id', $siswa_id)
                        ->where('jenis_berkas', 'surat_pernyataan')
                        ->first();

        return !empty($berkas);
    }

}
