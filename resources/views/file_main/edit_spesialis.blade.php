@extends('admin/sidebaradmin')
@section('konten')
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="form-group mb-0">
                <h1 style="color:white; margin-top: 10px; margin-left: 10px;">Pelaporan Trouble </h1>
            </div>
          <!-- Navbar links -->
          <!-- <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <a class="nav-link pr-5" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body  ml-3  d-none d-lg-block">
                    <span class="mb-10 text-md  font-weight-bold">Admin</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <a href="/logout" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul> -->
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-2">
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-3">Edit Spesialis</h3>
              <!-- <div class="col-md-4" style="margin-left:690px; margin-top:-50px">
                  <select name="status" id="status" class="form-control input-lg dynamic"  data-dependent="status">
                      <option value="">Solved</option>
                      <option value="">Proses</option>
                      <option value="">Pending</option>
                  </select>
            </div> -->
            </div>

            
            <div class = "form-group">
        <form method="post" action="{{url('/spesialis/update/'.$spesialis->id )}}">
        {{ csrf_field() }}
        <div class="col-sm-5">
            <!-- <label for="id_kategori">ID Detail </label><br> -->
         <input type="hidden" name="id_spesialis" required="required" class="form-control" value="{{ $spesialis->id_spesialis }}" readonly>
     </div>
      <div class="col-sm-5">
            <label for="id_detail"> Detail Kategori </label><br>
             <select name="id_detail" id="id_detail" class="cari_kategori form-control">
            <option>{{ $spesialis->detail_kategori->detail }}</option>
          @foreach ($detail_kategori as $dk)
          <option value="{{ $dk->id_detail }}">{{ $dk->detail }}
          </option>
          @endforeach
          </select>
        </div>
        <div class="col-sm-5">
            <label for="id_officer"> Officer </label><br>
             <select name="id_officer" id="id_officer" class="cari_kategori form-control">
            <option>{{ $spesialis->officer->nama_officer }}</option>
          @foreach ($officer as $o)
          <option value="{{ $o->id_officer }}">{{ $o->nama_officer }}
          </option>
          @endforeach
          </select>
        </div>
        <div class="col-sm-5">
            <!-- <label for="status_detail">Status Detail </label><br> -->
            <input type="hidden" name="status_spesialis" required="required" value="0" class="form-control">
        </div>
        

        <input type="submit" name="update" value="Simpan" class="btn btn-primary" style="margin-top: 30px; margin-right: 20px; margin-left: 15px">
        <a href="{{url('/spesialis')}}" class="btn btn-dark" style="margin-top: 30px; margin-right: 20px">Kembali</a>
    </form>
            <br>
            <!-- Light table -->
            <div class="table-responsive-md">
              <!-- <table class="table align-items-center"> -->
                
                
            </div>
            <!-- Card footer -->
            
          </div>
        </div>
      </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
 <!-- modal -->


@endsection