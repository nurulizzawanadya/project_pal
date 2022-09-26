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
              <h3 class="mb-3">EDIT PELAPORAN ADMIN</h3>
              <!-- <div class="col-md-4" style="margin-left:690px; margin-top:-50px">
                  <select name="status" id="status" class="form-control input-lg dynamic"  data-dependent="status">
                      <option value="">Solved</option>
                      <option value="">Proses</option>
                      <option value="">Pending</option>
                  </select>
            </div> -->
            </div>

            
            <div class = "form-group">
        <form method="post" action="{{url('/halamanadmin/update/'.$admin->id)}}" enctype="multipart/form-data" >
        {{ csrf_field() }}
        <div class="col-sm-5">
            <label for="id_helpdesk">ID HELPDESK </label><br>
         <input type="text" name="id_helpdesk" required="required" class="form-control" value="{{ $admin->id_helpdesk }}" readonly>
     </div>
        <div class="col-sm-5">
            <label for="nip">NIP </label><br>
            <input type="text" name="nip" required="required" value="{{ $admin->nip }}" class="form-control" readonly>
        </div>
        <div class="col-sm-5">
            <label for="id_divisi">Divisi </label><br>
            <input type="text" name="id_divisi" required="required" value="{{ $admin->id_divisi }}" class="form-control" readonly>
        </div>
         <div class="col-sm-5">
            <label for="id_departmen">Departmen </label><br>
              <input type="text" name="id_departmen" required="required" value="{{ $admin->id_departmen }}" class="form-control" readonly>
        </div>
        <div class="col-sm-5">
            <label for="tgl_pengajuan">Tanggal Pengajuan </label><br>
            <input type="text" name="tgl_pengajuan" required="required" value="{{ $admin->tgl_pengajuan }}" class="form-control" readonly>

        </div>
        
        <div class="col-sm-5">
            <label for="telp_ext">No Telepon </label> <br>
            <input type="number" name="telp_ext" required="required" value="{{ $admin->telp_ext }}" class="form-control" readonly>
        </div>
        
        <div class="col-sm-5">
            <label for="ket_masalah">Keterangan Masalah </label><br>
            <textarea name="ket_masalah" required="required" class="form-control" readonly rows="7">{{ $admin->ket_masalah }}</textarea>
        </div>
        <div class="col-sm-5">
            <label for="trouble">Trouble </label><br>
            <input type="text" name="trouble" required="required" value="trouble" class="form-control" readonly value="{{ $admin->trouble }}">
        </div>
        <div class="col-sm-5">
            <label for="foto_awal">Foto Awal </label><br>
            <input type="text" name="foto_awal" required="required" value="{{ $admin->foto_awal}}" class="form-control" readonly="">
            
        </div>
        <div class="col-sm-5">
            <label for="id_detail">Detail Kategori </label><br>
            <input type="text" name="id_detail" required="required" value="{{ $admin->id_detail }}" class="form-control" readonly="">
           <!-- <select name="id_detail" id="id_detail" class="cari_kategori form-control">
            <option value="{{ $admin->id_detail }}">{{ $admin->id_detail }}</option>
          @foreach ($detail_kategori as $det)
          <option value="{{ $det->id_detail }}">{{ $det->detail }}
          </option>
          @endforeach
          </select> -->
        </div>
        <div class="col-sm-5">
            <label for="tgl_selesai">Tanggal Selesai </label><br>
            <input type="text" name="tgl_selesai" required="required" class="form-control" value="<?php echo date('Y-m-d H:i:s') ?>" >
        </div>
         <div class="col-sm-5">
          <label for="rating">rating </label><br>
             <input type="text" name="rating" required="required" class="form-control" value="{{ $admin->rating }}" >
        </div>
        <div class="col-sm-5">
            <label for="solved">Solved </label><br>
            <textarea name="solved" required="required" class="form-control" rows="7">{{ $admin->solved }}</textarea>
        </div>
        <div class="col-sm-5">
            <label for="ttd">TTD </label><br>
            <a href="/ttd2/{{ $admin->id_helpdesk }}">ttd disini</a>
            <!-- <input type="text" name="ttd" required="required" class="form-control" value="{{ $admin->ttd }}"> -->
            <input type="text" name="ttd" required="required" class="form-control">
        </div>
        <div class="col-sm-5">
            <label for="officer">Officer </label><br>
            <input type="text" name="officer" required="required" class="form-control" value="{{ $admin->officer }}">

        </div>
        
        <div class="col-sm-5">
            <label for="foto_akhir">Foto Akhir </label><br>
            <input type="file" name="foto_akhir" id="foto_akhir" class="form-control" value="{{ $admin->foto_akhir }}">
        </div>
        <div class="col-sm-5">
            <label for="status">Status </label><br>
            <select name="status" class="chosen-select form-control tag-input-style" id="form-field-select-4" data-placeholder="Status" required="required"> 
              <option><?php  
            if ($admin->status == 0) {
                echo "Waiting";
            } elseif ($admin->status == 1) {
                echo "Pending";
            } elseif ($admin->status == 2) {
                echo "Proses";
            } elseif ($admin->status == 3) {
                echo "Solved";
            } elseif ($a->status == 4) {
                echo "Expired";
            } 
            ?></option>  
                <option value="0" > Waiting </option>  
                <option value="1" > Pending </option>  
                <option value="2" > Proses </option> 
                <option value="3" > Solved </option> 
              </select>
        </div>

        <input type="submit" name="update" value="Update" class="btn btn-primary" style="margin-top: 30px; margin-right: 20px; margin-left: 15px">
        <a href="{{url('/halamanadmin/detail/'.$admin->id_helpdesk)}}" class="btn btn-dark" style="margin-top: 30px; margin-right: 20px">Kembali</a>
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