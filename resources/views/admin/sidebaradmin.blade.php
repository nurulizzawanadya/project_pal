<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- <html lang="en"> -->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Halaman Admin</title>
  <!-- Favicon -->
  <link rel="icon" href={!! asset('assets/img/brand/favicon.png') !!} type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href={!! asset('assets/vendor/nucleo/css/nucleo.css') !!} type="text/css">
  <link rel="stylesheet" href={!! asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') !!} type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href={!! asset('assets/css/argon.css?v=1.2.0') !!} type="text/css">
  <!-- Datepicker -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- Datatables -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.css" />
  <style>
    
        td, th 
        {
          text-align: center;
          width: 1%;
        }
  </style>
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src={!! asset('assets/img/brand/palz.jpeg') !!} width="1000" height="900" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/halamanmanajemenuser' )}}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Manajemen User</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/halamanmanajemenofficer' )}}">
                <i class="ni ni-tv-2 text-orange"></i>
                <span class="nav-link-text">Manajemen Officer</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/kategori' )}}">
                <i class="ni ni-archive-2 text-red"></i>
                <span class="nav-link-text">Kategori Masalah</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="{{ url('/detailkategori' )}}">
                <i class="ni ni-archive-2 text-red"></i>
                <span class="nav-link-text">Detail Kategori Masalah</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/spesialis' )}}">
                <i class="ni ni-archive-2 text-red"></i>
                <span class="nav-link-text">Spesialis</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/halamanadmin' )}}">
                <i class="ni ni-archive-2 text-primary"></i>
                <span class="nav-link-text">Helpdesk</span>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="{{ url('/ttd') }}" data-toggle="card" data-target="#cardid" type="button">
                <i class="ni ni-archive-2 text-primary"></i>
                <span class="nav-link-text">TTD</span>
              </a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="profile.html">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="tables.html">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Tables</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.html">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Login</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.html">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Register</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="upgrade.html">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Upgrade</span>
              </a>
            </li>
          </ul> -->
          <!-- Divider -->
          <!-- <hr class="my-3"> -->
          <!-- Heading -->
          <!-- <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Documentation</span>
          </h6> -->
          <!-- Navigation -->
         <!-- <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html" target="_blank">
                <i class="ni ni-spaceship"></i>
                <span class="nav-link-text">Getting started</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html" target="_blank">
                <i class="ni ni-palette"></i>
                <span class="nav-link-text">Foundation</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html" target="_blank">
                <i class="ni ni-ui-04"></i>
                <span class="nav-link-text">Components</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/plugins/charts.html" target="_blank">
                <i class="ni ni-chart-pie-35"></i>
                <span class="nav-link-text">Plugins</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active active-pro" href="upgrade.html">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Upgrade to PRO</span>
              </a>
            </li> -->
          </ul>
        </div>
      </div>
    </div>
  </nav>
  @yield('konten')
  </body>
</html>