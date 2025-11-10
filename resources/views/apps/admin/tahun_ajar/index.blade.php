@extends('layouts.admin')

@section('header')
  <div class="page-block">
    <div class="row align-items-center">
      <div class="col-md-12">
        <div class="page-header-title">
          <h5 class="m-b-10">Tahun Ajar</h5>
        </div>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin./') }}">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="{{ route('admin.tahun_ajar') }}">Tahun Ajar</a></li>
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
        <form action="{{ route('admin.tahun_ajar.update') }}" method="POST">
            @csrf @method('PUT')
            <input type="hidden" name="tahun_ajar" value="{{ $tahun_ajaran_aktif->id }}">
            <div class="form-group mb-3">
                <label class="form-label">Tahun Ajar</label>
                <input type="text" value="{{ $tahun_ajaran_aktif->tahun_ajar }}" name="tahun_ajar" class="form-control">
            </div>
            <div class="">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
      </div>
    </div>
  </div>
@endsection