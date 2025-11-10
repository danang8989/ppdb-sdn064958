@extends('layouts.admin')

@section('header')
  <div class="page-block">
    <div class="row align-items-center">
      <div class="col-md-12">
        <div class="page-header-title">
          <h5 class="m-b-10">Calon Siswa</h5>
        </div>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('user./') }}">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="{{ route('admin.calon_siswa') }}">Calon Siswa</a></li>
        </ul>
      </div>
    </div>
  </div>
@endsection

@section('content')
  <div class="col-md-12">
    <h5 class="mb-3">Proses Penerimaan</h5>
    <div class="card tbl-card">
      <div class="card-body">
        <form action="{{ route('admin.calon_siswa.update') }}" method="POST">
            @csrf @method('PUT')
            <input type="hidden" name="id" value="{{ $calon_siswa->id }}">

            <div class="form-group mb-3">
                <label class="form-label">Proses Penerimaan</label>
                <select name="status" class="form-control">
                    <option value="">-- Pilih Status --</option>
                    <option value="menunggu" {{ old('status', $calon_siswa->status ?? '') == 'menunggu' ? 'selected' : '' }}>Menunggu</option>
                    <option value="diterima" {{ old('status', $calon_siswa->status ?? '') == 'diterima' ? 'selected' : '' }}>Diterima</option>
                    <option value="ditolak" {{ old('status', $calon_siswa->status ?? '') == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
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