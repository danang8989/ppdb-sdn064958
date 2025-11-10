@extends('layouts.admin')

@section('header')
  <div class="page-block">
    <div class="row align-items-center">
      <div class="col-md-12">
        <div class="page-header-title">
          <h5 class="m-b-10">Pengumuman Hasil</h5>
        </div>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('user./') }}">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="{{ route('user.pengumuman_hasil') }}">Pengumuman Hasil</a></li>
          {{-- <li class="breadcrumb-item"><a href="{{ route('admin./') }}">Home</a></li> --}}
        </ul>
      </div>
    </div>
  </div>
@endsection

@section('content')
  <div class="col-md-12">
    @if ($pendaftaran->status == 'menunggu')
        <div class="card tbl-card">
            <div class="card-body">
                <h3>Pengumuman Hasil akan di informasikan pada tanggal 12 Desember 2025 mendatang.</h3>
                <p>Data kamu sedang di proses</p>
            </div>
        </div>
    @endif

    @if ($pendaftaran->status == 'diterima')
        <div class="card tbl-card">
            <div class="card-body">
                <h3>Selamat! kamu telah dipilih sebagai siswa SD Negeri 064958.</h3>
                <p>Silahkan untuk melanjutkan registrasi pada sekolah segera</p>
            </div>
        </div>
    @endif

    @if ($pendaftaran->status == 'ditolak')
        <div class="card tbl-card">
            <div class="card-body">
                <h3>Mohon maaf, sepertinya kamu gagal untuk bisa mendaftar di SD Negeri 063958.</h3>
                <p>Jangan patah semangat, silahkan mendaftar ke Sekolah Swasta terdekat</p>
            </div>
        </div>
    @endif
     
  </div>
@endsection