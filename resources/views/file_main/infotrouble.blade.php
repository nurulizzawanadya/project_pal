@extends('folder_admin/master')
@section('konten')
<!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
   <!--  <nav class="navbar navbar-top navbar-expand navbar-dark bg-default border-bottom"> -->
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
         <!--  <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form> -->
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <!-- <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a> -->
              <!-- <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden"> -->
                <!-- Dropdown header -->
             <!--    <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                </div> -->
                <!-- List group -->
              <!--   <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto"> -->
                        <!-- Avatar -->
                      <!--   <img alt="Image placeholder" src="../assets/img/theme/team-1.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto"> -->
                        <!-- Avatar -->
                      <!--   <img alt="Image placeholder" src="../assets/img/theme/team-2.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto"> -->
                        <!-- Avatar -->
                       <!--  <img alt="Image placeholder" src="../assets/img/theme/team-3.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>5 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto"> -->
                        <!-- Avatar -->
                       <!--  <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto"> -->
                        <!-- Avatar -->
                      <!--   <img alt="Image placeholder" src="../assets/img/theme/team-5.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                </div> -->
                <!-- View all -->
                <!-- <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
              </div> -->
            </li>
            <li class="nav-item dropdown">
             <!--  <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-ungroup"></i>
              </a> -->
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                <div class="row shortcuts px-4">
                 <!--  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                      <i class="ni ni-calendar-grid-58"></i>
                    </span>
                    <small>Calendar</small>
                  </a> -->
                 <!--  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                      <i class="ni ni-email-83"></i>
                    </span>
                    <small>Email</small>
                  </a> -->
                 <!--  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                      <i class="ni ni-credit-card"></i>
                    </span>
                    <small>Payments</small>
                  </a> -->
                  <!-- <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                      <i class="ni ni-books"></i>
                    </span>
                    <small>Reports</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                      <i class="ni ni-pin-3"></i>
                    </span>
                    <small>Maps</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                      <i class="ni ni-basket"></i>
                    </span>
                    <small>Shop</small>
                  </a> -->
                </div>
              </div>
            </li>
          </ul>
          <!-- <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Isqi Hajri</span>
                  </div>
                </div>
              </a> -->
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<div class="header pb-6 d-flex align-items-center" style="min-height: 325px; background-image: url(../assets/img/theme/kapal-1.jpeg); background-size: 1090px; background-position:center;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-7"></span>
      <!-- Header container -->
      <div class="container">
         <div  class="row justify-content-center">
          <div class="col-xl-10 col-lg-10 col-md-4 px-2">
               <h1 class="h1">
            <h1  align="center" class="display-1 text-white">Pelaporan Gangguan</h1>
             <h1 align="center" class="display-1 text-white">Divisi Kawasan</h1>
           <!--  <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p> -->
           <!--  <a href="#!" class="btn btn-neutral">Edit profile</a> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-4 order-xl-2">
          <div class="card card-profile">
       <!--      <img src="../assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
            <h1  align="center" class="display-1 text-white">Pelaporan Gangguan</h1>
             <h1 align="center" class="display-1 text-white">Divisi Kawasan</h1> -->
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                 <!--  <a href="#">
                    <img src="../assets/img/theme/team-4.jpg" class="rounded-circle">
                  </a> -->
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-0 pb-0 pb-md-0">

             <!--  <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-sm btn-info  mr-4 ">Connect</a>
                <a href="#" class="btn btn-sm btn-default float-right">Message</a>
              </div> -->
            </div>
           <!--  <div class="card-body pt-0">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center">
                    <div class="col-sm-24">
        <div class="timeline-container">
          <div class="timeline-label"> -->
         <!--    <h1  align="center" class="display-1 text-white" style="text-align: center; margin-left: 50px">Pelaporan Gangguan</h1> -->
           <!--  <h1 class="label label-success arrowed-in-right label-lg" style="text-align: top; margin-left: 10px;"><b>Cara Penggunaan Aplikasi</b></h1> -->
           <!--  <div class="line" style="margin-top: 65px; margin-left: 35px;"> </div> -->
        <!--   </div>
          <div class="timeline-items">
            <div class="timeline-item clearfix">
              <div class="timeline-info">
                 <i class="timeline-indicator ace-icon fa fa-stack-2x btn btn-success no-hover">1</i>
                
              </div>
              <div class="widget-box transparent">
                <div class="widget-header widget-header-small">
                  <h3 class="widget-title smaller"> -->
                   <!--  <br> -->
                   <!--  <span class="grey">Klik "Cari NIP" dan masukan NIP anda</span>
                  </h3>
                </div>

                <div class="widget-body">
                  <div class="widget-main">
                    <span class="green" style="font-size: 14px">Jika NIP benar maka inputan nama, div/dept, no telp akan terisi otomatis</span><br>
                    <span class="red" style="font-size: 14px">Jika NIP salah maka akan keluar notif "NIP tidak ditemukan"</span>
                    <div class="space-1"></div>
                  </div>
                </div>
              </div>
            </div>
             </br>
            <div class="timeline-item clearfix">
              <div class="timeline-info">
                <i class="timeline-indicator ace-icon fa fa-stack-2x btn btn-success no-hover">2</i>
              </div>
              <div class="widget-box transparent">
                <div class="widget-header widget-header-small">
                  <h3 class="widget-title smaller">
                    <span class="grey">Pilih kategori masalah</span>
                  </h3>
                </div>
              </div>
            </div>
            <div class="timeline-item clearfix">
              <div class="timeline-info">
                <i class="timeline-indicator ace-icon fa fa-stack-2x btn btn-success no-hover">3</i>
              </div>
              <div class="widget-box transparent">
                <div class="widget-header widget-header-small">
                  <h3 class="widget-title smaller">
                    <span class="grey">Isikan Tambah keterangan</span>
                  </h3>
                </div>
                <div class="widget-body">
                  <div class="widget-main">
                    <span class="green" style="font-size: 14px">Keterangan troble atau masalah yang akan dilaporkan</span><br>
                    <div class="space-1"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="timeline-item clearfix">
              <div class="timeline-info">
                <i class="timeline-indicator ace-icon fa fa-stack-2x btn btn-success no-hover">4</i>
              </div>
              <div class="widget-box transparent">
                <div class="widget-header widget-header-small">
                  <h3 class="widget-title smaller">
                    <span class="grey">Tambahkan Foto</span>
                  </h3>
                </div>
                <div class="widget-body">
                  <div class="widget-main">
                    <span class="green" style="font-size: 14px">Upload foto atau hasil screenshoot untuk mempermudah identifikasi masalah pelaporan</span><br>
                    <div class="space-1"></div>
                  </div>
                </div>
              </div>
            </div> -->

       <!--    </div> --><!-- /.timeline-items -->
       <!--  </div> --><!-- /.timeline-container -->
      <!-- </div>
              -->      <!--  <div>
                      <span class="heading">22</span>
                      <span class="description">Friends</span>
                    </div> -->
                    <!-- <div>
                      <span class="heading">10</span>
                      <span class="description">Photos</span>
                    </div> -->
                    <!-- <div>
                      <span class="heading">89</span>
                      <span class="description">Comments</span>
                    </div> -->
                 <!--  </div>
                </div>
              </div> -->
              <!-- <div class="text-center">
                <h5 class="h3">
                  Jessica Jones<span class="font-weight-light">, 27</span>
                </h5> -->
                <!-- <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i>Bucharest, Romania
                </div> -->
               <!--  <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
                </div> -->
                <!-- <div>
                  <i class="ni education_hat mr-2"></i>University of Computer Science
                </div> -->
              <!-- </div> -->
            </div>-->
          </div>
        </div>
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
               <!--  <div class="col-8">
                  <h3 class="mb-0">Edit profile </h3>
                </div> -->
              <!--   <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                </div> -->
              </div>
            </div>
             <div class="card-body">
              <form>
                  <a href="{{url('/infonip')}}"><button type="button" role="button" style="margin-top: 7px;" class="btn btn-success"  data-toggle="modal" style="background: green !important; border-color: green !important"> <i class="fa-caret-square-o-right"></i> NIP
                        </button></a>

                        <a href="{{url('/infotrouble')}}"><button type="button" role="button" style="margin-top: 7px;" class="btn btn-success"  data-toggle="modal" style="background: green !important; border-color: green !important"> <i class="fa-caret-square-o-right"></i> Trouble
                        </button></a>
                        
             <!--    <h6 class="heading-small text-muted mb-4"><b>Form Cek Gangguan</b></h6> -->
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-sm-9">
                      <div class="form-group">
                        <!-- <label class="form-control-label" for="no_antrian">No Tiket</label>
                        <input type="text" id="no_antrian" name="no_antrian" class="form-control" placeholder="No tiket" onchange="cekNip(this)"s/> -->
                       <!--  <button href="#modal-form" role="button" class="btn btn-info btn-sm col-xs-9 col-sm-2" data-toggle="modal" style="background: blue !important; border-color: blue !important"> Cari NIP
                        </button> -->
                      </div>
                    </div>
                    <!-- <div class="col-lg-4"> -->
                      <div class="form-group">
                        <br>
                        <!-- <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" class="form-control" placeholder="jesse@example.com"> -->
                       <!--  <button href="#modal-form" role="button" style="margin-top: 7px;" class="btn btn-success"  data-toggle="modal" style="background: green !important; border-color: green !important"> <i class="fa-caret-square-o-right"></i> Cek Progress
                        </button> -->


                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="col-sm-12">
          <div class="card">

            <div class="card-header">                   
              <div class="row align-items-center">
               <!--  <div class="col-8">
                  <h3 class="mb-0">Edit profile </h3>
                </div> -->
              <!--   <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                </div> -->
              </div>
            </div>

          <div class="card-body">
              <form>
                <h1 class="heading-small mb-4" style="font-size: 24px"><b>Informasi Gangguan</b></h1>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-sm-9">
                      <div class="form-group">
                          <label class="form-control-label" for="no_antrian">No Tiket</label>
                          <form class="form-inline" action="{{url('/search-tiket')}}" method="post">
                          <input type="search" class="form-control" placeholder="Cari Tiket..." name="cari" aria-label="search"> </br>

                       <!--  <button href="#modal-form" role="button" class="btn btn-info btn-sm col-xs-9 col-sm-2" data-toggle="modal" style="background: blue !important; border-color: blue !important"> Cari NIP
                        </button> -->
                      </div>
                    </div>
                    <!-- <div class="col-lg-4"> -->
                      <div class="form-group">
                        <br>
                        <!-- <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" class="form-control" placeholder="jesse@example.com"> -->
                        <button href="#modal-form" role="button" style="margin-top: 7px;" class="btn btn-success"  data-toggle="modal" style="background: green !important; border-color: green !important"> <i class="fa-caret-square-o-right"></i> Cek Progress
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="col-sm-12">
          <div class="card">
            @if ($b==null)
                  @else
            <div class="card-header">

              <div class="row align-items-center">
               <!--  <div class="col-8">
                  <h3 class="mb-0">Edit profile </h3>
                </div> -->
              <!--   <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                </div> -->
              </div>
            </div>

             <div class="card-body">
              <form>
                @foreach ($helpdesk as $hd)
                <h1 class="heading-small mb-4" style="font-size: 24px"><b>Informasi Gangguan TA- {{$hd->id_helpdesk}}</b></h1>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-sm-9">
                      <div class="form-group">
                        
                          <button href="#modal-form" role="button" style="margin-top: 7px;" class="btn btn-info"  data-toggle="modal" style="background: green !important; border-color: green !important"> <i class="fa-caret-square-o-right"></i> No antrian : <br> 
                          <?php
                          echo $no_a;
                          ?>
                            
                          </button>
                       <!--  <label class="form-control-label" for="no_antrian">No Antrian</label>
                        <input type="text" id="no_antrian" name="no_antrian" class="form-control" placeholder="No Antrian" onchange="cekNip(this)"s/> -->
                       <!--  <button href="#modal-form" role="button" class="btn btn-info btn-sm col-xs-9 col-sm-2" data-toggle="modal" style="background: blue !important; border-color: blue !important"> Cari NIP
                        </button> -->
                      </div>
                    </div>
                    <!-- <div class="col-lg-4"> -->
                      <div class="col-sm-16">
                      <div class="form-group">
                        <div>
                          @if ($hd->status == '0')
                         <a href =""> <button role="button" style='color:#fff;' class="btn btn-danger" type="button"></i> Status :<br> Waiting</button></a>
                      @elseif ($hd->status == '1')
                          <a href =""><button role="button" style='color:#fff;' class="btn btn-warning" type="button"></i> Status :<br> Pending</button></a>
                      @elseif($hd->status == '2')
                        <a href =""> <button role="button" style='color:#fff;' class="btn btn-light" type="button"></i> Status :<br>On Proses</button></a>
                     @elseif ($hd->status == '3') 
                        <a href =""><button  role="button" style='color:#fff;' class="btn btn-success" type="button"></i> Status :<br> Solved</button></a>
                        @endif
                          <!-- <button href="#modal-form" role="button" style="margin-top: 7px; padding-left: 15px" class="btn btn-success"  data-toggle="modal" style="background: green !important; border-color: green !important"> <i class="fa-caret-square-o-right"></i> Status : <br> Success
                          </button> -->
                        </div>
                       <!--  <label class="form-control-label" for="no_antrian">No Antrian</label>
                        <input type="text" id="no_antrian" name="no_antrian" class="form-control" placeholder="No Antrian" onchange="cekNip(this)"s/> -->
                       <!--  <button href="#modal-form" role="button" class="btn btn-info btn-sm col-xs-9 col-sm-2" data-toggle="modal" style="background: blue !important; border-color: blue !important"> Cari NIP
                        </button> -->

                      </div>
                    </div>

                    <table class="table table-responsive-sm-12">
                     
                        <tbody>
                          
                          <tr>
                          <td>No Antrian</td>
                          <td ><?php
                          echo $no_a;
                          ?></td>
                        </tr>

                        <tr>
                          <td>NIP</td>
                          <td>{{$hd->nip}}</td>

                        </tr>
                        <tr>
                          <td>Nama</td>
                          <td>{{$hd->user->nama}}</td>
                        </tr>
                        <tr>
                          <td>Tanggal laporan</td>
                          <td>{{$hd->tgl_pengajuan}}</td>
                        </tr>
                        <tr>
                          <td>Divisi</td>
                          <td class="text-wrap">{{$hd->user->divisi->divisi}}</td>
                        </tr>
                        <tr>
                          <td>Keluhan</td>
                          <td class="text-wrap">{{$hd->ket_masalah}}</td>
                        </tr>
                        <tr>
                          <td>Masalah</td>
                          <td class="text-wrap">{{$hd->trouble}}</td>
                        </tr>
                        @if($hd->status==1 && $hd->status==2)
                        <tr>
                          <td>Keterangan</td>
                          <td class="text-wrap">{{$hd->solved}}</td>

                        </tr>
                        @endif
                        </tbody>
                     
                    </table>
                    @if($hd->status==3)
                        <a href="{{url('/antriansolved/tampil/'.$hd->id_helpdesk)}}"><button role="button" type="button" style="margin-left: 355px; margin-top: 30px;" class="btn btn-success"  data-toggle="modal" style="background: blue !important; border-color: blue !important"> <i class="ni ni-send"></i><span> More Information </span>
                        </button></a>
                      
                      @endif
                       @endforeach
                       @endif
                      
                    </div>
                  </div>
                </form>
              </div>
                  <div class="form-group">
                        <br>
                        <!-- <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" class="form-control" placeholder="jesse@example.com"> -->
                        
                      </div>
              </div>



            </div>
          </div>






                    <!-- </div> -->
                 <!--  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label class="form-control-label" for="nama">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" readonly/> -->
                       <!--  <button href="#modal-form" role="button" class="btn btn-info btn-sm col-xs-9 col-sm-2" data-toggle="modal" style="background: blue !important; border-color: blue !important"> Cari NIP
                        </button> -->
                     <!--  </div>
                    </div>

                    <div class="col-sm-12">
                      <div class="form-group">
                        <label class="form-control-label" for="divisi">Divisi/Departemen</label>
                        <input type="text" id="divisi" name="divisi" class="form-control" placeholder="Divisi/Departemen" readonly/> -->
                       <!--  <button href="#modal-form" role="button" class="btn btn-info btn-sm col-xs-9 col-sm-2" data-toggle="modal" style="background: blue !important; border-color: blue !important"> Cari NIP
                      </div>
                    </div>
                  <!--  <div class="form-group">
                    <div class="col-sm-12">
                     
                   </div> -->
                  <!--   <div class="col-sm-12">
                      <label class="form-control-label" for="kategori_masalah">Kategori Masalah</label>
                        <select name="detail_kategori" class="chosen-select form-control tag-input-style" id="form-field-select-4" data-placeholder="Pilih kategori">
                                                    <optgroup label="AC">
                                                        <option value="1" > Instalasi Baru (AC)</option>  
                                                        <option value="2" > Gangguan (AC)</option>  
                                                        <option value="3" > Lainnya (AC)</option> 
                                                    </optgroup>
                                                  <optgroup label="Air">
                                                        <option value="4" > Instalasi Baru (Air)</option> 
                                                        <option value="5" > Gangguan (Air)</option> 
                                                        <option value="6" > Lainnya (Air)</option>  
                                                        <option value="7" > Permintaan Supply (Air)</option>  
                                                    </optgroup>
                                                  <optgroup label="Telp">
                                                        <option value="21" > Gangguan (Telp)</option> 
                                                        <option value="22" > Instalasi Baru (Telp)</option> 
                                                        <option value="23" > Lainnya (Telp)</option>  
                                                    </optgroup>
                                                  <optgroup label="Listrik">
                                                        <option value="18" > Perbaikan (Listrik)</option> 
                                                        <option value="19" > Instalasi Baru (Listrik)</option>  
                                                        <option value="20" > Gangguan (Listrik)</option>  
                                                    </optgroup>
                                                  <optgroup label="Jalan">
                                                        <option value="12" > Perbaikan (Jalan)</option> 
                                                    </optgroup>
                                                  <optgroup label="Dermaga">
                                                        <option value="11" > Perbaikan (Dermaga)</option> 
                                                    </optgroup>
                                                  <optgroup label="Kantor">
                                                        <option value="13" > Perbaikan (Kantor)</option>  
                                                    </optgroup>
                                                  <optgroup label="Bengkel">
                                                        <option value="10" > Perbaikan (Bengkel)</option> 
                                                    </optgroup>
                                                  <optgroup label="APAR">
                                                        <option value="8" > Penambahan APAR</option>  
                                                        <option value="9" > Pengecekan APAR</option>  
                                                    </optgroup>
                                                  <optgroup label="Kebersihan">
                                                        <option value="15" > Pengangkutan Sampah</option> 
                                                        <option value="16" > Penataan Taman</option>  
                                                    </optgroup>
                                                  <optgroup label="Tata Ruang Tata Graha">
                                                        <option value="17" > Permintaan Desain Interior & Furnishing</option> 
                                                    </optgroup>
                                              </select>
                                              <br>
                    </div > -->

                  <!--  <div class="col-sm-12">
                      <div class="form-group">
                        <label class="form-control-label" for="notelp">No Telp Ext</label>
                        <input type="text" id="notelp" name="notelp" class="form-control" placeholder="No Telp Ext"/>
                        </button> --> 
                       <!--  <button href="#modal-form" role="button" class="btn btn-info btn-sm col-xs-9 col-sm-2" data-toggle="modal" style="background: blue !important; border-color: blue !important"> Cari NIP
                        </button> -->
                     <!--  </div>
                    </div>


                    <div class="col-sm-12">
                      <div class="form-group">
                        <label class="form-control-label" for="keterangan">Tambahkan Keterangan</label>
                        <input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="Tambahkan Keterangan"/> -->
                       <!--  <button href="#modal-form" role="button" class="btn btn-info btn-sm col-xs-9 col-sm-2" data-toggle="modal" style="background: blue !important; border-color: blue !important"> Cari NIP
                        </button> -->
                     <!--  </div>
                    </div>

                   <div class="col-sm-12">
                    <div class="form-group"> -->
                   <!--  <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Foto Trouble <font color="red"><sup>**Jika Perlu</sup></font> </label> -->
                    <!--  -->
           
@endsection