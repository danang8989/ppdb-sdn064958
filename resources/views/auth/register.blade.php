@extends('layouts.auth')

@section('content')
<div class="auth-form">
    <div class="auth-header">
        <a href="{{ route('login') }}"><img src="{{ asset('admin/images/logo.png') }}" style="width: 100px" alt="img"></a>
    </div>
    <div class="card my-5">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-end mb-4">
                <h3 class="mb-0"><b>Daftar</b></h3>
                {{-- <a href="{{ route('login') }}" class="link-primary">Masuk disini jika sudah ada akun</a> --}}
            </div>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email Address">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <div class="d-grid mt-4">
                    <button type="submit" class="btn btn-primary">Daftar</button>
                </div>
            </form>
        </div>
    </div>

    <div class="auth-footer row">
        <!-- <div class=""> -->
        <div class="col my-1">
            <p class="m-0">Copyright © <a href="#">SDN 064958</a></p>
        </div>
        <div class="col-auto my-1">
            <ul class="list-inline footer-link mb-0">
            <li class="list-inline-item"><a href="#">Kontak Sekolah</a></li>
            </ul>
        </div>
        <!-- </div> -->
    </div>
</div>
@endsection
