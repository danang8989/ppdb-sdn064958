@extends('layouts.admin')

@section('header')
  <div class="page-block">
    <div class="row align-items-center">
      <div class="col-md-12">
        <div class="page-header-title">
          <h5 class="m-b-10">Dashboard</h5>
        </div>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin./') }}">Home</a></li>
          {{-- <li class="breadcrumb-item"><a href="{{ route('admin./') }}">Home</a></li> --}}
        </ul>
      </div>
    </div>
  </div>
@endsection

@section('content')
  <div class="col-md-12">
    <h5>Tahun Ajaran 2025/2026</h5>
    <p></p>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h6 class="mb-2 f-w-400 text-muted">Jumlah Pendaftaran</h6>
        <h4 class="mb-3">{{ $jumlah_pendaftar }}</h4>
        <p class="mb-0 text-muted text-sm">Jumlah pendaftar tahun ini</p>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h6 class="mb-2 f-w-400 text-muted">Lulus PPDB</h6>
        <h4 class="mb-3">{{ $jumlah_lulus }}</h4>
        <p class="mb-0 text-muted text-sm">Jumlah kelulusan tahun ini.</p>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h6 class="mb-2 f-w-400 text-muted">Tidak Lulus PPDB</h6>
        <h4 class="mb-3">{{ $jumlah_tidak_lulus }}</h4>
        <p class="mb-0 text-muted text-sm">Jumlah tidak lulus tahun ini.</p>
      </div>
    </div>
  </div>

  <div class="col-md-12">
    <h5 class="mb-3">Pendaftar Terbaru</h5>
      <div class="card tbl-card">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover table-borderless mb-0">
            <thead>
              <tr>
                <th>#.</th>
                <th style="width: 50px">No KK</th>
                <th>Nama Lengkap</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Kelurahan</th>
                <th>Kecamatan</th>
                <th>Kabupaten</th>
                <th>Provinsi</th>
                <th>Kode Pos</th>
                <th>Umur</th>
                <th>Asal TK</th>
                <th>Agama</th>
                <th>Status Penerimaan</th>
                <th class="text-end">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @if (!empty($q_name))
                    @if (count($pendaftaran) == 0)
                    <tr>
                        <td colspan="17">Data tidak ditemukan.</td>
                    </tr>
                    @endif
                @elseif(count($pendaftaran) == 0)
                    <tr>
                        <td colspan="17">Belum ada data.</td>
                    </tr>
                @endif
                @foreach ($pendaftaran as $item)
                  <tr>
                    <td><a href="#" class="text-muted">{{ $item->calonSiswa->id }}</a></td>
                    <td>{{ $item->calonSiswa->no_kk }}</td>
                    <td>{{ $item->calonSiswa->nama_lengkap }}</td>
                    <td>{{ $item->calonSiswa->tempat_lahir }}</td>
                    <td>{{ date('d/m/Y', strtotime($item->calonSiswa->tanggal_lahir)) }}</td>
                    <td>{{ $item->calonSiswa->jenis_kelamin }}</td>
                    <td>{{ $item->calonSiswa->alamat }}</td>
                    <td>{{ $item->calonSiswa->kelurahan }}</td>
                    <td>{{ $item->calonSiswa->kecamatan }}</td>
                    <td>{{ $item->calonSiswa->kabupaten }}</td>
                    <td>{{ $item->calonSiswa->provinsi }}</td>
                    <td>{{ $item->calonSiswa->kode_pos }}</td>
                    <td>{{ $item->calonSiswa->umur }}</td>
                    <td>{{ $item->calonSiswa->asal_tk }}</td>
                    <td>{{ $item->calonSiswa->agama }}</td>
                    <td>
                      @if ($item->status == 'menunggu')
                          <span class="d-flex align-items-center gap-2"><i
                        class="fas fa-circle text-warning f-10 m-r-5"></i>Menunggu</span>
                      @elseif($item->status == 'diterima')
                        <span class="d-flex align-items-center gap-2"><i
                          class="fas fa-circle text-success f-10 m-r-5"></i>Diterima</span>
                      @else
                          <span class="d-flex align-items-center gap-2"><i
                        class="fas fa-circle text-danger f-10 m-r-5"></i>Ditolak</span>
                      @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.calon_siswa.edit', $item->calonSiswa->id) }}">
                          <button class="btn btn-warning btn-sm text-white mb-0 me-0" type="button"><i class="mdi mdi-pencil"></i>Proses Penerimaan</button>    
                        </a>
                    </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection