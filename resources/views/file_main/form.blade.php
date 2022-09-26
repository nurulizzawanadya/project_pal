@extends('folder_admin/master')
@section('konten')
<div class="main-content" id="panel">
    <!-- Topnav -->
   <!--  <nav class="navbar navbar-top navbar-expand navbar-dark bg-default border-bottom"> -->
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
         <!-- 
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
           -->
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
    <!-- Header -->
    <!-- Header -->
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
            <div class="rectangle" >
              <br>
                <h5 class="title" style="text-align: center; margin-left: 20px; font-size: 25px"><b>CARA PENGGUNAAN APLIKASI</b></h5>
                <br>
                <div class="line" style="margin-top: 5px; margin-left: 35px;">
                  
                <div class="number" style="margin-bottom: -110px">
                  <h3 class="number" style="margin-left: 110px;">01</h3>
                  <br/>
                  <h3 class="text">Klik "Cari NIP" dan masukan NIP anda.Jika NIP benar maka inputan nama, div/dept, no telp akan terisi otomatis. Jika NIP salah maka akan keluar notif "**NIP tidak ditemukan**"</h3>
                </div>
                <br/><br><br><br><br><br><br>
                <div class="number" style="margin-bottom: -45px">
                  <h3 class="number" style="margin-left: 110px;">02</h3>
                  <br/>
                  <h3 class="text">Isikan Tambah keterangan. Pilih kategori masalah. Keterangan trouble atau masalah yang akan dilaporkan</h3>
                </div>

                <br/><br><br><br><br>
                <div class="number">
                  <h3 class="number" style="margin-left: 110px;">03</h3>
                  <br/>
                  <h3 class="text">Tambahkan Foto. Upload foto atau hasil screenshoot untuk mempermudah identifikasi masalah pelaporan</h3>
                </div>
                <br/><br><br><br><br>

                </div>
                
              
            </div>
            <!--  <span class="label label-success arrowed-in-right label-lg"><b>Cara Penggunaan Aplikasi</b></span> -->
           <!--  <img src="../assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top"> -->
           <!--  <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="../assets/img/theme/team-4.jpg" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div> -->
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">

             <!--  <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-sm btn-info  mr-4 ">Connect</a>
                <a href="#" class="btn btn-sm btn-default float-right">Message</a>
              </div> -->
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center">

                    <!-- <div class="timeline-container">
          <div class="timeline-label">
            <span class="label label-success arrowed-in-right label-lg"><b>Cara Penggunaan Aplikasi</b></span>
          </div>
          <div class="timeline-items">
            <div class="timeline-item clearfix"> -->
              <!-- <div class="timeline-info">
                <i class="timeline-indicator ace-icon fa fa-stack-2x btn btn-success no-hover">1</i>
              </div> -->
              <!-- <div class="widget-box transparent"> -->
                <!-- <div class="widget-header widget-header-small">
                  <h5 class="widget-title smaller">
                    <span class="grey">Klik "Cari NIP" dan masukan NIP anda</span>
                  </h5>
                  
                </div> -->
                

                <!-- <div class="widget-body">
                  <div class="widget-main">
                    <i class="ni ni-single-02"></i>
                    <span class="grey">Klik "Cari NIP" dan masukan NIP anda</span>

                    <span class="green">Jika NIP benar maka inputan nama, div/dept, no telp akan terisi otomatis</span><br>
                    <span class="red">Jika NIP salah maka akan keluar notif "**NIP tidak ditemukan**"</span>
                    <div class="space-1"></div>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- <div class="timeline-item clearfix">
              <div class="timeline-info">
                <i class="timeline-indicator ace-icon fa fa-stack-2x btn btn-success no-hover">2</i>
              </div>
              <div class="widget-box transparent">
                <div class="widget-header widget-header-small">
                  <h5 class="widget-title smaller">
                    <span class="grey">Pilih kategori masalah</span>
                  </h5>
                </div>
              </div>
            </div> -->
            <!-- <div class="timeline-item clearfix">
              <div class="timeline-info">
                <i class="timeline-indicator ace-icon fa fa-stack-2x btn btn-success no-hover">3</i>
              </div>
              <div class="widget-box transparent">
                <div class="widget-header widget-header-small">
                  <h5 class="widget-title smaller">
                    <span class="grey">Isikan Tambah keterangan</span>
                  </h5>
                </div>
                <div class="widget-body">
                  <div class="widget-main">
                    <span class="grey">Pilih kategori masalah</span>

                    <span class="green">Keterangan troble atau masalah yang akan dilaporkan</span><br>
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
                  <h5 class="widget-title smaller">
                    <span class="grey">Tambahkan Foto</span>
                  </h5>
                </div>
                <div class="widget-body">
                  <div class="widget-main">
                    <span class="green">Upload foto atau hasil screenshoot untuk mempermudah identifikasi masalah pelaporan</span><br>
                    <div class="space-1"></div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- /.timeline-items -->
        <!-- </div> --> <!-- /.timeline-container -->
                   <!--  <div>
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
                  </div>
                </div>
              </div>
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
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card">
            <!-- <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Edit profile </h3>
                </div>
                <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                </div>
              </div>
            </div> -->
            <div class="card-body">
              <form method="post" action="{{url('/form/simpan')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <h6 class="heading-small text-muted mb-4">Form Input Gangguan</h6>
                @if (session('success'))
                <!-- <div class="alert-success">
                  <p>{{ session('success') }}</p>
                </div> -->
                 <div class="alert alert-success  alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">×</button>  
                    <strong>{{ session('success') }}</strong>
                </div>
                @endif
                
                @if ($errors->any())
                <!-- <div class="alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                    <p>Data tidak dapat ditambahkan karena data tidak lengkap</p>
                  </ul>
                </div> -->
                 <div class="alert alert-warning  alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <ul>
                    @foreach ($errors->all() as $error)
                    <!-- <li>{{ $error }}</li> -->
                    @endforeach
                    <!-- <p>Data tidak dapat ditambahkan karena data tidak lengkap</p> -->
                    <strong>Data tidak dapat ditambahkan karena data tidak lengkap</strong>
                  </ul>  
                    
                </div>
                @endif
                <!-- @if ($message = Session::get('success'))
                      <div class="alert alert-success  alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">×</button>  
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    @if ($message = Session::get('warning'))
                    <div class="alert alert-warning alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif

                    @if ($message = Session::get('error'))
                    <div class="alert alert-error alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif -->
                    <!-- @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
        @endif -->
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label class="form-control-label" for="cari_nip" id="coba">NIP</label>
                        <input type="text" id="cari_nip" name="nip" class="form-control" placeholder="NIP" />
                       <!--  <button href="#modal-form" role="button" class="btn btn-info btn-sm col-xs-9 col-sm-2" data-toggle="modal" style="background: blue !important; border-color: blue !important"> Cari NIP
                        </button> -->
                      </div>
                      <div class="ajax" id="ubah">
                      </div>
                    <!-- <div class="col-lg-4"> -->
                    <!--   <div class="form-group">
                        <br>
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" class="form-control" placeholder="jesse@example.com">
                        <button href="#modal-form" role="button" style="margin-top: 7px;" class="btn btn-info"  data-toggle="modal" style="background: blue !important; border-color: blue !important"> <i class="fas fa-search"></i> Cari NIP
                        </button>
                      </div> -->
                    <!-- </div> -->
                  </div>
                    <!-- <div class="col-sm-12">
                      <div class="form-group">
                        <label class="form-control-label" for="nama">Nama</label>
                        <input type="text" id="nama" name="nama" class="cari_nama form-control" placeholder="Nama"/>
                      </div>
                    </div> -->
<!-- 
                      

                     -->
                  

                    <!-- <div class="col-sm-12">
    <div class="form-group">
        <label class="form-control-label" for="id_divisi">Divisi</label><br>
         <select id="id_divisi" name="id_divisi" class="form-control" readonly>
          <option>Divisi</option>
          @foreach ($divisi as $di)
            <option value="{{ $di->id_divisi }}">{{ $di->divisi }}
            </option>
            @endforeach
            
        </select>
    </div>
</div>
<div class="col-sm-12">
    <div class="form-group">
        <label class="form-control-label" for="id_departmen">Departmen</label><br>
       <select id="id_departmen" name="id_departmen" class="form-control" readonly>
        <option>Departmen</option>
        @foreach ($departmen as $dept)
            <option value="{{ $dept->id_departmen }}">{{ $dept->departmen }}
            </option>
        @endforeach
        </select>
    </div>
</div> -->

                    <div class="col-sm-12">
                      <label class="form-control-label" for="id_detail">Kategori Masalah</label>
                        <select name="id_detail" class="chosen-select form-control tag-input-style" id="form-field-select-4" data-placeholder="Pilih kategori">
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
                    </div >

                   <div class="col-sm-12">
                      <div class="form-group">
                        <label class="form-control-label" for="telp_ext">No Telp Ext</label>
                        <input type="text" id="telp_ext" name="telp_ext" class="form-control" placeholder="No Telp Ext"/>
                      </div>
                    </div>

                    <div class="col-sm-12">
                      <div class="form-group">
                        <label class="form-control-label" for="trouble">Deskripsi Kerusakan</label>
                        <input type="text" id="trouble" name="trouble" class="form-control" placeholder="Deskripsi Kerusakan Yang Terjadi"/>
                      </div>
                    </div>


                    <div class="col-sm-12">
                      <div class="form-group">
                        <label class="form-control-label" for="ket_masalah">Tambahkan Keterangan</label>
                        <input type="text" id="ket_masalah" name="ket_masalah" class="form-control" placeholder="Tambahkan Keterangan"/>
                      </div>
                    </div>
                    <input type="hidden" name="tgl_pengajuan" value="<?php
                    date_default_timezone_set('Asia/Jakarta'); 
                    echo date('Y-m-d H:i:s') ?>">
                    <input type="hidden" name="tgl_selesai" value="<?php 
                    date_default_timezone_set('Asia/Jakarta'); 
                    echo date('Y-m-d H:i:s') ?>">
                    <input type="hidden" name="trouble" value="-">
                    <input type="hidden" name="solved" value="-">
                    <input type="hidden" name="foto_akhir" value="-">
                    <input type="hidden" name="ttd" value="-">
                    <input type="hidden" name="officer" value="-">
                    <input type="hidden" name="status" value="0">
                    <input type="hidden" name="rating" value="0">


                   <div class="col-sm-12">
                    <div class="form-group">
                     <label class="form-control-label" for="foto_awal">Tambahkan Foto <font color="red"></font></label>
                    <div class="col-sm-12S">
                      <input type="file" id="foto_awal" name="foto_awal">
                    </div>
                  </div>
                </div>



                  
                  </div>
                </div>

                
                <!-- <hr class="my-4" /> -->
                <div class="form-group">
                        <!-- <br>
                        <button type="submit" name="simpan" href="#modal-form" role="button" style="margin-left: 255px; margin-top: 0;" class="btn btn-success"  data-toggle="modal" style="background: blue !important; border-color: blue !important"> <i class="ni ni-send"></i><span> Laporkan Masalah</span>
                        </button> -->
                        <input type="submit" name="submit" class="btn btn-success" value="Laporkan Masalah" style="margin-left: 200px">
                      </div>
                <!-- Address -->
                <!-- <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4"> -->
                  <div class="row">
                    <!-- <div class="col-md-12"> -->
                      <!-- <div class="form-group">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input id="input-address" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
                      </div> -->
                    </div>
                  </div>
                  <div class="row">
                    <!-- <div class="col-lg-4"> -->
                      <!-- <div class="form-group">
                        <label class="form-control-label" for="input-city">City</label>
                        <input type="text" id="input-city" class="form-control" placeholder="City" value="New York">
                      </div> -->
                    </div>
                    <!-- <div class="col-lg-4"> -->
                      <!-- <div class="form-group">
                        <label class="form-control-label" for="input-country">Country</label>
                        <input type="text" id="input-country" class="form-control" placeholder="Country" value="United States">
                      </div> -->
                    </div>
                    <!-- <div class="col-lg-4"> -->
                      <!-- <div class="form-group">
                        <label class="form-control-label" for="input-country">Postal code</label>
                        <input type="number" id="input-postal-code" class="form-control" placeholder="Postal code">
                      </div> -->
                    </div>
                  </div>
                </div>
                </div>
               <!--  <hr class="my-4" /> -->
                <!-- Description -->
                <!-- <h6 class="heading-small text-muted mb-4">About me</h6>
                <div class="pl-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">About Me</label>
                    <textarea rows="4" class="form-control" placeholder="A few words about you ...">A beautiful Dashboard for Bootstrap 4. It is Free and Open Source.</textarea>
                  </div>
                </div> -->
              </form>
            </div>
          </div>
        </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script type="text/javascript">
  // $(document).ready(function(){
  //   $('.cari_departmen').select2();
  //   placeholder: 'Cari...',
  //   $.ajax({
  //     url: "{{url('cari_departmen')}}",
  //     //url: '/form/selectdept',
  //     dataType: 'json',
  //     delay: 250,
  //     processResults: function (data) {
  //       return {
  //         results:  $.map(data, function (item) {
  //           return {
  //             text: item.departmen,
  //             id: item.id_departmen
  //           }
  //         })
  //       };
  //     },
  //     cache: false
  //   })
  // });

  // $(document).ready(function(){
  //   $('.cari_divisi').select2();
  //   placeholder: 'Cari...',
  //   $.ajax({
  //     url: "{{url('/cari_divisi')}}",
  //     //url: '/form/selectdivisi',
  //     dataType: 'json',
  //     delay: 250,
  //     processResults: function (data) {
  //       return {
  //         results:  $.map(data, function (item) {
  //           return {
  //             text: item.divisi,
  //             id: item.id_divisi
  //           }
  //         })
  //       };
  //     },
  //     cache: false
  //   })
  // });
</script>

<script type="text/javascript">
 $(document).ready(function(){
    $('#cari_nip').on('change',function(){
      var nip=$(this).val();
      var url="{{url('/ajax/form')}}";
      var gbUrl = url+"/"+nip;
      $.ajax({
        type:'get',
        // url:'/ajax/form/'+nip,
        url:gbUrl,
        success:function(data){
          $('#ubah').html(data);
        },
        error: function(data){
          alert("NIP tidak ada");
        }
      });
    });
  });
</script>

<!-- <script>
$(document).ready(function(){

 $('.ubah').change(function(){
  if($(this).val() != '')
  {
   var select = $(this).attr("id");
   var value = $(this).val();
   var dependent = $(this).data('dependent');
   var _token = $('input[name="_token"]').val();
   $.ajax({
    url:"/ajax/fetch",
    method:"POST",
    data:{select:select, value:value, _token:_token, dependent:dependent},
    success:function(result)
    {
     $('#'+dependent).html(result);
    }

   })
  }
 });

 $('#nip').change(function(){
  $('#id_divisi').val('');
  $('#id_departmen').val('');
 });

 $('#id_divisi').change(function(){
  $('#id_departmen').val('');
 });
 

});
</script> -->

      @endsection