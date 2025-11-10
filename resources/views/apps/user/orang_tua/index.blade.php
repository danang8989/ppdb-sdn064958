@extends('layouts.admin')

@section('header')
  <div class="page-block">
    <div class="row align-items-center">
      <div class="col-md-12">
        <div class="page-header-title">
          <h5 class="m-b-10">Data Orang Tua</h5>
        </div>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('user./') }}">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="{{ route('user.orang_tua') }}">Calon Siswa</a></li>
        </ul>
      </div>
    </div>
  </div>
@endsection

@section('content')
    @php
        $pekerjaanList = [
            'PNS', 'TNI/POLRI', 'Guru/Dosen', 'Petani', 'Pedagang', 
            'Karyawan Swasta', 'Wiraswasta', 'Sopir', 'Buruh', 
            'Nelayan', 'Tidak Bekerja', 'Lainnya'
        ];

        $pekerjaanListIbu = [
            'Ibu Rumah Tangga', 'PNS', 'TNI/POLRI', 'Guru/Dosen', 'Petani', 'Pedagang', 
            'Karyawan Swasta', 'Wiraswasta', 'Sopir', 'Buruh', 
            'Nelayan', 'Tidak Bekerja', 'Lainnya'
        ];
    @endphp
  <div class="col-md-12">
    <h5 class="mb-3">Pendaftar Terbaru</h5>
    <div class="card tbl-card">
      <div class="card-body">
        <form action="{{ route('user.orang_tua.update') }}" method="POST">
            @csrf @method('PUT')
            <input type="hidden" name="id" value="{{ $orang_tua->id }}">

            <div class="form-group mb-3">
                <label class="form-label">Nama Ayah</label>
                <input type="text" name="nama_ayah" value="{{ old('nama_ayah', $orang_tua->nama_ayah ?? '') }}" class="form-control" placeholder="Nama Lengkap Ayah">
            </div>

            <div class="form-group mb-3">
                <label class="form-label">NIK Ayah</label>
                <input type="text" name="nik_ayah" value="{{ old('nik_ayah', $orang_tua->nik_ayah ?? '') }}" class="form-control" placeholder="Nomor Induk Kependudukan Ayah">
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Pekerjaan Ayah</label>
                <select name="pekerjaan_ayah" class="form-control">
                    <option value="">-- Pilih Pekerjaan Ayah --</option>
                    @foreach ($pekerjaanList as $pekerjaan)
                        <option value="{{ $pekerjaan }}" {{ $orang_tua->pekerjaan_ayah == $pekerjaan ? 'selected' : '' }}>
                            {{ $pekerjaan }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Pendidikan Terakhir Ayah</label>
                <select name="pendidikan_ayah" class="form-control">
                    <option value="">-- Pilih Pendidikan Ayah --</option>
                    <option value="SD" {{ old('pendidikan_ayah', $orang_tua->pendidikan_ayah ?? '') == 'SD' ? 'selected' : '' }}>SD</option>
                    <option value="SMP" {{ old('pendidikan_ayah', $orang_tua->pendidikan_ayah ?? '') == 'SMP' ? 'selected' : '' }}>SMP</option>
                    <option value="SMA" {{ old('pendidikan_ayah', $orang_tua->pendidikan_ayah ?? '') == 'SMA' ? 'selected' : '' }}>SMA / SMK</option>
                    <option value="D3" {{ old('pendidikan_ayah', $orang_tua->pendidikan_ayah ?? '') == 'D3' ? 'selected' : '' }}>D3</option>
                    <option value="S1" {{ old('pendidikan_ayah', $orang_tua->pendidikan_ayah ?? '') == 'S1' ? 'selected' : '' }}>S1</option>
                    <option value="S2" {{ old('pendidikan_ayah', $orang_tua->pendidikan_ayah ?? '') == 'S2' ? 'selected' : '' }}>S2</option>
                    <option value="S3" {{ old('pendidikan_ayah', $orang_tua->pendidikan_ayah ?? '') == 'S3' ? 'selected' : '' }}>S3</option>
                </select>
            </div>

            {{-- Data Ibu --}}
            <div class="form-group mb-3">
                <label class="form-label">Nama Ibu</label>
                <input type="text" name="nama_ibu" value="{{ old('nama_ibu', $orang_tua->nama_ibu ?? '') }}" class="form-control" placeholder="Nama Lengkap Ibu">
            </div>

            <div class="form-group mb-3">
                <label class="form-label">NIK Ibu</label>
                <input type="text" name="nik_ibu" value="{{ old('nik_ibu', $orang_tua->nik_ibu ?? '') }}" class="form-control" placeholder="Nomor Induk Kependudukan Ibu">
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Pekerjaan Ibu</label>
                <select name="pekerjaan_ibu" class="form-control">
                    <option value="">-- Pilih Pekerjaan Ibu --</option>
                    @foreach ($pekerjaanListIbu as $pekerjaan)
                        <option value="{{ $pekerjaan }}" {{ $orang_tua->pekerjaan_ibu == $pekerjaan ? 'selected' : '' }}>
                            {{ $pekerjaan }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Pendidikan Terakhir Ibu</label>
                <select name="pendidikan_ibu" class="form-control">
                    <option value="">-- Pilih Pendidikan Ibu --</option>
                    <option value="SD" {{ old('pendidikan_ibu', $orang_tua->pendidikan_ibu ?? '') == 'SD' ? 'selected' : '' }}>SD</option>
                    <option value="SMP" {{ old('pendidikan_ibu', $orang_tua->pendidikan_ibu ?? '') == 'SMP' ? 'selected' : '' }}>SMP</option>
                    <option value="SMA" {{ old('pendidikan_ibu', $orang_tua->pendidikan_ibu ?? '') == 'SMA' ? 'selected' : '' }}>SMA / SMK</option>
                    <option value="D3" {{ old('pendidikan_ibu', $orang_tua->pendidikan_ibu ?? '') == 'D3' ? 'selected' : '' }}>D3</option>
                    <option value="S1" {{ old('pendidikan_ibu', $orang_tua->pendidikan_ibu ?? '') == 'S1' ? 'selected' : '' }}>S1</option>
                    <option value="S2" {{ old('pendidikan_ibu', $orang_tua->pendidikan_ibu ?? '') == 'S2' ? 'selected' : '' }}>S2</option>
                    <option value="S3" {{ old('pendidikan_ibu', $orang_tua->pendidikan_ibu ?? '') == 'S3' ? 'selected' : '' }}>S3</option>
                </select>
            </div>

            {{-- Kontak & Wali --}}
            <div class="form-group mb-3">
                <label class="form-label">Nomor HP Orang Tua</label>
                <input type="text" name="no_hp_orangtua" value="{{ old('no_hp_orangtua', $orang_tua->no_hp_orangtua ?? '') }}" class="form-control" placeholder="Nomor HP Aktif">
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Nama Wali (jika ada)</label>
                <input type="text" name="nama_wali" value="{{ old('nama_wali', $orang_tua->nama_wali ?? '') }}" class="form-control" placeholder="Nama Wali">
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Hubungan dengan Wali</label>
                <input type="text" name="hubungan_wali" value="{{ old('hubungan_wali', $orang_tua->hubungan_wali ?? '') }}" class="form-control" placeholder="Contoh: Paman, Bibi, Kakak, dll.">
            </div>

            <div class="">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
      </div>
    </div>
  </div>
@endsection