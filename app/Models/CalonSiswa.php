<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalonSiswa extends Model
{
    protected $guarded = ['id'];

    public function pendaftaran(){
        return $this->hasMany(Pendaftaran::class);
    }

    public function orangTua(){
        return $this->hasMany(OrangTua::class);
    }

        public function getAktaKelahiranFile($siswa_id)
    {
        $berkas = Berkas::where('siswa_id', $siswa_id)
                        ->where('jenis_berkas', 'akta_kelahiran')
                        ->first();
        
        if ($berkas == null) {
            return null;
        }

        return $berkas->path;
    }

    public function getKartuKeluargaFile($siswa_id)
    {
        $berkas = Berkas::where('siswa_id', $siswa_id)
                        ->where('jenis_berkas', 'kartu_keluarga')
                        ->first();
        
        if ($berkas == null) {
            return null;
        }

        return $berkas->path;
    }

    public function getKtpOrtuFile($siswa_id)
    {
        $berkas = Berkas::where('siswa_id', $siswa_id)
                        ->where('jenis_berkas', 'ktp_ortu')
                        ->first();

        if ($berkas == null) {
            return null;
        }

        return $berkas->path;
    }

    public function getSuratTkFile($siswa_id)
    {
        $berkas = Berkas::where('siswa_id', $siswa_id)
                        ->where('jenis_berkas', 'surat_tk')
                        ->first();

        if ($berkas == null) {
            return null;
        }

        return $berkas->path;
    }

    public function getKartuImunisasiFile($siswa_id)
    {
        $berkas = Berkas::where('siswa_id', $siswa_id)
                        ->where('jenis_berkas', 'kartu_imunisasi')
                        ->first();

        if ($berkas == null) {
            return null;
        }

        return $berkas->path;
    }

    public function getFotoAnakFile($siswa_id)
    {
        $berkas = Berkas::where('siswa_id', $siswa_id)
                        ->where('jenis_berkas', 'foto_anak')
                        ->first();

        if ($berkas == null) {
            return null;
        }

        return $berkas->path;
    }

    public function getSuratKesehatanFile($siswa_id)
    {
        $berkas = Berkas::where('siswa_id', $siswa_id)
                        ->where('jenis_berkas', 'surat_kesehatan')
                        ->first();

        if ($berkas == null) {
            return null;
        }

        return $berkas->path;
    }

    public function getSuratPernyataanFile($siswa_id)
    {
        $berkas = Berkas::where('siswa_id', $siswa_id)
                        ->where('jenis_berkas', 'surat_pernyataan')
                        ->first();

        if ($berkas == null) {
            return null;
        }
        return $berkas->path;
    }
}
