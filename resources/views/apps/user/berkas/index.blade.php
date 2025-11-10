@extends('layouts.admin')

@section('header')
  <div class="page-block">
    <div class="row align-items-center">
      <div class="col-md-12">
        <div class="page-header-title">
          <h5 class="m-b-10">Pemberkasan</h5>
        </div>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('user./') }}">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="{{ route('user.berkas') }}">Berkas</a></li>
        </ul>
      </div>
    </div>
  </div>
@endsection

@section('content')
  <div class="col-md-12">
    <h5 class="mb-3">Berkas</h5>
    <div class="card tbl-card">
      <div class="card-body">
        <form action="{{ route('user.berkas.update') }}" enctype="multipart/form-data" method="POST">
            @csrf @method('PUT')
            <div class="form-group mb-3">
                <label class="form-label">Akta Kelahiran</label>
                <input type="file" name="berkas[akta_kelahiran]" class="form-control">
                <span></span>
                @if (count($berkas) != 0)
                    @if (!empty($berkas[0]->getAktaKelahiranFile($calon_siswa->id)))
                      <span><i class="ti ti-check" style="color: green"></i> Sudah Dikirim</span>  
                    @endif
                @endif
              
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Kartu Keluarga (KK)</label>
                <input type="file" name="berkas[kartu_keluarga]" class="form-control">
                <span></span>
                @if (count($berkas) != 0)
                  @if (!empty($berkas[0]->getKartuKeluargaFile($calon_siswa->id)))
                      <span><i class="ti ti-check" style="color: green"></i> Sudah Dikirim</span>  
                  @endif
                @endif

            </div>

            <div class="form-group mb-3">
                <label class="form-label">KTP Orang Tua / Wali</label>
                <input type="file" name="berkas[ktp_ortu]" class="form-control">
                <span></span>
                @if (count($berkas) != 0)
                  @if (!empty($berkas[0]->getKtpOrtuFile($calon_siswa->id)))
                      <span><i class="ti ti-check" style="color: green"></i> Sudah Dikirim</span>  
                  @endif
                @endif
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Ijazah / Surat Keterangan TK</label>
                <input type="file" name="berkas[surat_tk]" class="form-control">
                <span></span>
                @if (count($berkas) != 0)
                  @if (!empty($berkas[0]->getSuratTkFile($calon_siswa->id)))
                      <span><i class="ti ti-check" style="color: green"></i> Sudah Dikirim</span>  
                  @endif
                @endif
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Kartu Imunisasi / KIA</label>
                <input type="file" name="berkas[kartu_imunisasi]" class="form-control">
                <span></span>
                @if (count($berkas) != 0)
                  @if (!empty($berkas[0]->getKartuImunisasiFile($calon_siswa->id)))
                      <span><i class="ti ti-check" style="color: green"></i> Sudah Dikirim</span>  
                  @endif
                @endif
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Pas Foto Anak</label>
                <input type="file" name="berkas[foto_anak]" class="form-control">
                <span></span>
                @if (count($berkas) != 0)
                  @if (!empty($berkas[0]->getFotoAnakFile($calon_siswa->id)))
                      <span><i class="ti ti-check" style="color: green"></i> Sudah Dikirim</span>  
                  @endif
                @endif
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Surat Keterangan Sehat</label>
                <input type="file" name="berkas[surat_kesehatan]" class="form-control">
                <span></span>
                @if (count($berkas) != 0)
                  @if (!empty($berkas[0]->getSuratKesehatanFile($calon_siswa->id)))
                      <span><i class="ti ti-check" style="color: green"></i> Sudah Dikirim</span>  
                  @endif
                @endif
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Surat Pernyataan Orang Tua</label>
                <input type="file" name="berkas[surat_pernyataan]" class="form-control">
                <span></span>
                @if (count($berkas) != 0)
                  @if (!empty($berkas[0]->getSuratPernyataanFile($calon_siswa->id)))
                      <span><i class="ti ti-check" style="color: green"></i> Sudah Dikirim</span>  
                  @endif
                @endif
            </div>

            <div class="">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
      </div>
    </div>
  </div>
@endsection