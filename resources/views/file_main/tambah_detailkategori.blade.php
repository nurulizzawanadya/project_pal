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
              <h3 class="mb-3">Tambah Detail Kategori</h3>
              <!-- <div class="col-md-4" style="margin-left:690px; margin-top:-50px">
                  <select name="status" id="status" class="form-control input-lg dynamic"  data-dependent="status">
                      <option value="">Solved</option>
                      <option value="">Proses</option>
                      <option value="">Pending</option>
                  </select>
            </div> -->
            </div>

            
            <div class = "form-group">
        <form method="get" action="{{url('/detailkategori/simpan/')}}">
        {{ csrf_field() }}
        <div class="col-sm-5">
            <!-- <label for="id_kategori">ID Detail </label><br> -->
         <input type="hidden" name="id_detail" required="required" class="form-control" readonly>
     </div>
      <div class="col-sm-5">
            <label for="id_kategori"> Kategori </label><br>
             <select name="id_kategori" id="id_kategori" class="cari_kategori form-control">
            <option>Kategori</option>
          @foreach ($kategori as $kat)
          <option value="{{ $kat->id_kategori }}">{{ $kat->kategori }}
          </option>
          @endforeach
          </select>
        </div>
        <div class="col-sm-5">
            <label for="detail">Detail Kategori </label><br>
            <input type="text" name="detail" required="required" class="form-control" >
        </div>
        <div class="col-sm-5">
            <!-- <label for="status_detail">Status Detail </label><br> -->
            <input type="hidden" name="status_detail" required="required" value="0" class="form-control">
        </div>
        

        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary" style="margin-top: 30px; margin-right: 20px; margin-left: 15px">
        <a href="{{url('/detailkategori')}}" class="btn btn-dark" style="margin-top: 30px; margin-right: 20px">Kembali</a>
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