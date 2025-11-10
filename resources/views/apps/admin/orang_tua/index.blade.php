@extends('layouts.admin')

@section('header')
  <div class="page-block">
    <div class="row align-items-center">
      <div class="col-md-12">
        <div class="page-header-title">
          <h5 class="m-b-10">Calon Siswa</h5>
        </div>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin./') }}">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="{{ route('admin.calon_siswa') }}">Calon Siswa</a></li>
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
        <div class="table-responsive">
          <table class="table table-hover table-borderless mb-0">
            <thead>
              <tr>
                <th>#.</th>
                <th>Nama Calon Siswa</th>
                <th>Nama Ayah</th>
                <th>NIK Ayah</th>
                <th>Pekerjaan Ayah</th>
                <th>Pendidikan Ayah</th>
                <th>Nama Ibu</th>
                <th>NIK Ibu</th>
                <th>Pekerjaan Ibu</th>
                <th>Pendidikan Ibu</th>
                <th>No Hp Orang Tua</th>
                <th>Nama Wali</th>
                <th>Hubungan Wali</th>
              </tr>
            </thead>
            <tbody>
                @if (!empty($q_name))
                    @if (count($orang_tua) == 0)
                    <tr>
                        <td colspan="12">Data tidak ditemukan.</td>
                    </tr>
                    @endif
                @elseif(count($orang_tua) == 0)
                    <tr>
                        <td colspan="12">Belum ada data.</td>
                    </tr>
                @endif
                @foreach ($orang_tua as $item)
                  <tr>
                    <td><a href="#" class="text-muted">{{ $item->id }}</a></td>
                    <td>{{ $item->calonSiswa->nama_lengkap }}</td>
                    <td>{{ $item->nama_ayah }}</td>
                    <td>{{ $item->nik_ayah }}</td>
                    <td>{{ $item->pekerjaan_ayah }}</td>
                    <td>{{ $item->pendidikan_ayah }}</td>
                    <td>{{ $item->nama_ibu }}</td>
                    <td>{{ $item->nik_ibu }}</td>
                    <td>{{ $item->pekerjaan_ibu }}</td>
                    <td>{{ $item->pendidikan_ibu }}</td>
                    <td>{{ $item->no_hp_orangtua }}</td>
                    <td>{{ $item->nama_wali }}</td>
                    <td>{{ $item->hubungan_wali }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection