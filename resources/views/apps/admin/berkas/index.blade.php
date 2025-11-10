@extends('layouts.admin')

@section('header')
  <div class="page-block">
    <div class="row align-items-center">
      <div class="col-md-12">
        <div class="page-header-title">
          <h5 class="m-b-10">Berkas</h5>
        </div>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin./') }}">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="{{ route('admin.calon_siswa') }}">Berkas</a></li>
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
                <th>Akta Kelahiran</th>
                <th>KTP Orang Tua</th>
                <th>Surat TK</th>
                <th>Kartu Imunisasi</th>
                <th>Foto Anak</th>
                <th>Surat Kesehatan</th>
                <th>Surat Pernyataan</th>
                <th>Kartu Keluarga</th>
              </tr>
            </thead>
            <tbody>
                @if (!empty($q_name))
                    @if (count($calon_siswa) == 0)
                    <tr>
                        <td colspan="17">Data tidak ditemukan.</td>
                    </tr>
                    @endif
                @elseif(count($calon_siswa) == 0)
                    <tr>
                        <td colspan="17">Belum ada data.</td>
                    </tr>
                @endif
                @foreach ($calon_siswa as $item)
                  <tr>
                    <td><a href="#" class="text-muted">{{ $item->id }}</a></td>
                    <td><a href="#" class="text-muted">{{ $item->nama_lengkap }}</a></td>
                    <td>
                        <a href="{{ asset($item->getAktaKelahiranFile($item->id)) }}">Download</a>
                    </td>
                    <td><a href="{{ asset($item->getKartuKeluargaFile($item->id)) }}">Download</a></td>
                    <td><a href="{{ asset($item->getKtpOrtuFile($item->id)) }}">Downloads</a></td>
                    <td><a href="{{ asset($item->getSuratTkFile($item->id)) }}">Download</a></td>
                    <td><a href="{{ asset($item->getKartuImunisasiFile($item->id)) }}">Download</a></td>
                    <td><a href="{{ asset($item->getFotoAnakFile($item->id)) }}">Download</a></td>
                    <td><a href="{{ asset($item->getSuratKesehatanFile($item->id)) }}">Download</a></td>
                    <td><a href="{{ asset($item->getSuratPernyataanFile($item->id)) }}">Download</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection