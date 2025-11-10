@extends('layouts.admin')

@section('header')
  <div class="page-block">
    <div class="row align-items-center">
      <div class="col-md-12">
        <div class="page-header-title">
          <h5 class="m-b-10">Jadwal Pendaftaran</h5>
        </div>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin./') }}">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="{{ route('admin.jadwal_pendaftaran') }}">Tahun Ajar</a></li>
        </ul>
      </div>
    </div>
  </div>
@endsection

@section('content')
  <div class="col-md-12">
    <h5 class="mb-3">Tahun Ajar</h5>
    <div class="card tbl-card">
      <div class="card-body">
        <form action="{{ route('admin.jadwal_pendaftaran.update') }}" method="POST">
            @csrf @method('PUT')
            <input type="hidden" name="id" value="{{ $jadwal_pendaftaran->id }}">
            <div class="form-group mb-3">
                <label class="form-label">Jadwal Pembukaan Pendaftaran</label>
                <input type="date" value="{{ $jadwal_pendaftaran->jadwal_pembukaan }}" name="jadwal_pembukaan" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label class="form-label">Jadwal Penutupan Pendaftaran</label>
                <input type="date" value="{{ $jadwal_pendaftaran->jadwal_penutupan }}" name="jadwal_penutupan_pendaftaran" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label class="form-label">Jadwal Hasil Seleksi</label>
                <input type="date" value="{{ $jadwal_pendaftaran->jadwal_seleksi }}" name="jadwal_seleksi" class="form-control">
            </div>
            <div class="">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
      </div>
    </div>
  </div>
@endsection