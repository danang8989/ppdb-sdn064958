<nav class="pc-sidebar">
    <div class="navbar-wrapper">
      <div class="m-header">
       <a href="{{ route('user./') }}" class="b-brand text-primary">
          <!-- ========   Change your logo from here   ============ -->
          <img src="{{ asset('admin/images/logo.png') }}" style="width: 40px">
          <span style="padding-top: 20px; padding-left: 10px; color: black">SD Negeri 064958</span>
        </a>
      </div>
      <div class="navbar-content">
        <ul class="pc-navbar">
          <li class="pc-item">
            <a href="{{ route('user.dashboard') }}" class="pc-link">
              <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
              <span class="pc-mtext">Dashboard</span>
            </a>
          </li>

          <li class="pc-item pc-caption">
            <label>PPDB</label>
            <i class="ti ti-dashboard"></i>
          </li>
          <li class="pc-item">
            <a href="{{ route('user.data_diri') }}" class="pc-link">
              <span class="pc-micon"><i class="ti ti-user"></i></span>
              <span class="pc-mtext">Data Diri</span>
            </a>
          </li>
          <li class="pc-item">
            <a href="{{ route('user.orang_tua') }}" class="pc-link">
              <span class="pc-micon"><i class="ti ti-users"></i></span>
              <span class="pc-mtext">Data Orang Tua</span>
            </a>
          </li>
          <li class="pc-item">
            <a href="{{ route('user.berkas') }}" class="pc-link">
              <span class="pc-micon"><i class="ti ti-file-import"></i></span>
              <span class="pc-mtext">Data Berkas</span>
            </a>
          </li>

          <li class="pc-item pc-caption">
            <label>Pengumuman</label>
            <i class="ti ti-news"></i>
          </li>
          <li class="pc-item">
            <a href="{{ route('user.pengumuman_hasil') }}" class="pc-link">
              <span class="pc-micon"><i class="ti ti-confetti"></i></span>
              <span class="pc-mtext">Pengumuman Hasil</span>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>