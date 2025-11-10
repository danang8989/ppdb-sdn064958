@extends('layouts.admin')

@section('header')
  <div class="page-block">
    <div class="row align-items-center">
      <div class="col-md-12">
        <div class="page-header-title">
          <h5 class="m-b-10">Data Diri</h5>
        </div>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('user./') }}">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="{{ route('user.data_diri') }}">Calon Siswa</a></li>
        </ul>
      </div>
    </div>
  </div>
@endsection

@section('content')
  <div class="col-md-12">
    <h5 class="mb-3">Pendaftar Terbaru</h5>
    <div class="card tbl-card">
      <div class="card-body">
        <form action="{{ route('user.data_diri.update') }}" method="POST">
            @csrf @method('PUT')
            <input type="hidden" name="id" value="{{ $calon_siswa->id }}">

            <div class="form-group mb-3">
                <label class="form-label">Email</label>
                <input type="email" disabled name="email" value="{{ auth()->user()->email }}" class="form-control" placeholder="Email Address">
            </div>
            <div class="form-group mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap', $calon_siswa->nama_lengkap ?? '') }}" class="form-control" placeholder="Nama Lengkap">
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir', $calon_siswa->tempat_lahir ?? '') }}" class="form-control" placeholder="Tempat Lahir">
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', $calon_siswa->tanggal_lahir ?? '') }}" class="form-control">
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control">
                    <option value="">-- Pilih Jenis Kelamin --</option>
                    <option value="L" {{ old('jenis_kelamin', $calon_siswa->jenis_kelamin ?? '') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="P" {{ old('jenis_kelamin', $calon_siswa->jenis_kelamin ?? '') == 'P' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat" value="{{ old('alamat', $calon_siswa->alamat ?? '') }}" class="form-control" placeholder="Alamat Lengkap">
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Kelurahan</label>
                <input type="text" name="kelurahan" value="{{ old('kelurahan', $calon_siswa->kelurahan ?? '') }}" class="form-control" placeholder="Kelurahan">
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Kecamatan</label>
                <input type="text" name="kecamatan" value="{{ old('kecamatan', $calon_siswa->kecamatan ?? '') }}" class="form-control" placeholder="Kecamatan">
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Kabupaten</label>
                <input type="text" name="kabupaten" value="{{ old('kabupaten', $calon_siswa->kabupaten ?? '') }}" class="form-control" placeholder="Kabupaten/Kota">
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Provinsi</label>
                <input type="text" name="provinsi" value="{{ old('provinsi', $calon_siswa->provinsi ?? '') }}" class="form-control" placeholder="Provinsi">
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Kode Pos</label>
                <input type="text" name="kode_pos" value="{{ old('kode_pos', $calon_siswa->kode_pos ?? '') }}" class="form-control" placeholder="Kode Pos">
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Umur</label>
                <input type="text" name="umur" value="{{ old('umur', $calon_siswa->umur ?? '') }}" class="form-control" placeholder="Umur">
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Nomor KK</label>
                <input type="text" name="no_kk" value="{{ old('no_kk', $calon_siswa->no_kk ?? '') }}" class="form-control" placeholder="Nomor Kartu Keluarga">
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Asal TK</label>
                <input type="text" name="asal_tk" value="{{ old('asal_tk', $calon_siswa->asal_tk ?? '') }}" class="form-control" placeholder="Nama TK Asal (jika ada)">
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Agama</label>
                <select name="agama" class="form-control">
                    <option value="">-- Pilih Agama --</option>
                    <option value="Islam" {{ old('agama', $calon_siswa->agama ?? '') == 'Islam' ? 'selected' : '' }}>Islam</option>
                    <option value="Kristen" {{ old('agama', $calon_siswa->agama ?? '') == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                    <option value="Katolik" {{ old('agama', $calon_siswa->agama ?? '') == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                    <option value="Hindu" {{ old('agama', $calon_siswa->agama ?? '') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                    <option value="Buddha" {{ old('agama', $calon_siswa->agama ?? '') == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                    <option value="Konghucu" {{ old('agama', $calon_siswa->agama ?? '') == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Jalur Pendaftaran</label>
                <select name="jalur" class="form-control">
                    <option value="">-- Pilih Jalur Pendaftaran --</option>
                    <option value="Zonasi" {{ old('jalur', $pendaftaran->jalur ?? '') == 'Reguler' ? 'selected' : '' }}>Reguler</option>
                    <option value="Zonasi" {{ old('jalur', $pendaftaran->jalur ?? '') == 'Zonasi' ? 'selected' : '' }}>Zonasi</option>
                    <option value="Prestasi" {{ old('jalur', $pendaftaran->jalur ?? '') == 'Prestasi' ? 'selected' : '' }}>Prestasi</option>
                </select>
            </div>

            <div class="">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
      </div>
    </div>
  </div>
@endsection