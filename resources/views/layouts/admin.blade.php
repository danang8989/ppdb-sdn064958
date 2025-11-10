<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
  <title>PPDB SDN 064958</title>
  <!-- [Meta] -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Daftar SDN 064958">
  <meta name="keywords" content="Daftar SDN 064958">
  <meta name="author" content="Danang">

  <!-- [Favicon] icon -->
  <link rel="icon" href="{{ asset('admin/images/favicon.svg') }}" type="image/x-icon"> <!-- [Google Font] Family -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
  <!-- [Tabler Icons] https://tablericons.com -->
  <link rel="stylesheet" href="{{ asset('admin/fonts/tabler-icons.min.css') }}" >
  <!-- [Feather Icons] https://feathericons.com -->
  <link rel="stylesheet" href="{{ asset('admin/fonts/feather.css') }}" >
  <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
  <link rel="stylesheet" href="{{ asset('admin/fonts/fontawesome.css') }}" >
  <!-- [Material Icons] https://fonts.google.com/icons -->
  <link rel="stylesheet" href="{{ asset('admin/fonts/material.css') }}" >
  <!-- [Template CSS Files] -->
  <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}" id="main-style-link" >
  <link rel="stylesheet" href="{{ asset('admin/css/style-preset.css') }}" >

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">
  <!-- [ Pre-loader ] start -->
<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>
<!-- [ Pre-loader ] End -->
 <!-- [ Sidebar Menu ] start -->
 @if (auth()->user()->user_level == 'Admin')
  @include('components.dashboard.admin_sidebar')
  @else
    @include('components.dashboard.user_sidebar')
 @endif
  <!-- [ Sidebar Menu ] end --> <!-- [ Header Topbar ] start -->
  @include('components.dashboard.navbar')
  <!-- [ Header ] end -->

  <!-- [ Main Content ] start -->
  <div class="pc-container">
    <div class="pc-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
        @yield('header')
      </div>
      <!-- [ breadcrumb ] end -->
      <!-- [ Main Content ] start -->
      <div class="row">
        <!-- [ sample-page ] start -->
        @yield('content')
      </div>
    </div>
  </div>
  <!-- [ Main Content ] end -->
  @include('components.dashboard.footer')

  <!-- [Page Specific JS] start -->
  <script src="{{ asset('admin/js/plugins/apexcharts.min.js') }}"></script>
  <script src="{{ asset('admin/js/pages/dashboard-default.js') }}"></script>
  <!-- [Page Specific JS] end -->
  <!-- Required Js -->
  <script src="{{ asset('admin/js/plugins/popper.min.js') }}"></script>
  <script src="{{ asset('admin/js/plugins/simplebar.min.js') }}"></script>
  <script src="{{ asset('admin/js/plugins/bootstrap.min.js') }}"></script>
  <script src="{{ asset('admin/js/fonts/custom-font.js') }}"></script>
  <script src="{{ asset('admin/js/pcoded.js') }}"></script>
  <script src="{{ asset('admin/js/plugins/feather.min.js') }}"></script>
  <script>layout_change('light');</script>
  <script>change_box_container('false');</script>
  <script>layout_rtl_change('false');</script>
  <script>preset_change("preset-1");</script>
  <script>font_change("Public-Sans");</script>

</body>
<!-- [Body] end -->

</html>