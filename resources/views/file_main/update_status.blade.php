@extends('admin/sidebarhelpdesk')
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
              <h3 class="mb-3">UPDATE STATUS</h3>
              <!-- <div class="col-md-4" style="margin-left:690px; margin-top:-50px">
                  <select name="status" id="status" class="form-control input-lg dynamic"  data-dependent="status">
                      <option value="">Solved</option>
                      <option value="">Proses</option>
                      <option value="">Pending</option>
                  </select>
            </div> -->
            </div>

            
            <div class = "form-group">
        <form method="post" action="{{url('/helpdesk/updates/'.$data->id )}}" >
        {{ csrf_field() }}
        

           <div class="col-sm-5">
            
         <input type="hidden" name="id_helpdesk" required="required" class="form-control" value="{{ $data->id_helpdesk }}" readonly>
     </div>
        <div class="col-sm-5">
            
            <input type="hidden" name="nip" required="required" value="{{ $data->nip }}" class="form-control" readonly>
        </div>
        <div class="col-sm-5">
            
            <input type="hidden" name="id_divisi" required="required" value="{{ $data->id_divisi }}" class="form-control" readonly>
        </div>
         <div class="col-sm-5">
            
              <input type="hidden" name="id_departmen" required="required" value="{{ $data->id_departmen }}" class="form-control" readonly>
        </div>
        <div class="col-sm-5">
           
            <input type="hidden" name="tgl_pengajuan" required="required" value="{{ $data->tgl_pengajuan }}" class="form-control" readonly>

        </div>
        
        <div class="col-sm-5">
            
            <input type="hidden" name="telp_ext" required="required" value="{{ $data->telp_ext }}" class="form-control" readonly>
        </div>
        
        <div class="col-sm-5">
            
            <input type="hidden" name="ket_masalah" required="required" class="form-control" readonl rows="7" value="{{ $data->ket_masalah }}">
        </div>
        <div class="col-sm-5">
           
            <input type="hidden" name="trouble" required="required" value="trouble" class="form-control" readonly value="{{ $data->trouble }}">
        </div>
        <div class="col-sm-5">
            
            <input type="hidden" name="foto_awal" required="required" value="{{ $data->foto_awal}}" class="form-control" readonly="">
            
        </div>
        <div class="col-sm-5">
            
            <input type="hidden" name="id_detail" required="required" value="{{ $data->id_detail }}" class="form-control" readonly="">
           
        </div>
        <div class="col-sm-5">
            
            <input type="hidden" name="tgl_selesai" required="required" class="form-control" value="{{ $data->tgl_selesai }}" >
        </div>
         <div class="col-sm-5">
         
             <input type="hidden" name="rating" required="required" class="form-control" value="{{ $data->rating }}" >
        </div>

        <div class="col-sm-5">
            
            <input type="hidden" name="ttd" required="required" class="form-control" value="{{ $data->ttd }}">
        </div>
        <div class="col-sm-5">
            
            <input type="hidden" name="officer" required="required" class="form-control" value="{{ $data->officer }}">

        </div>
        
        <div class="col-sm-5">
            
            <input type="hidden" name="foto_akhir" id="foto_akhir" class="form-control" value="{{ $data->foto_akhir }}">
        </div>

        <div class="col-sm-5">
            <label for="status">Status </label>
            <br>
            <select name="status" class="chosen-select form-control tag-input-style" id="form-field-select-4" data-placeholder="Status" required="required"> 
                <option value="{{ $data->status }}">
                    <?php  
                        if ($data->status == 0) {
                            echo "Waiting";
                        } elseif ($data->status == 1) {
                            echo "Pending";
                        } elseif ($data->status == 2) {
                            echo "Proses";
                        } elseif ($data->status == 3) {
                            echo "Solved";
                        } 
                    ?>
                </option>
            <option value="0" > Waiting </option>  
            <option value="1" > Pending </option>  
            <option value="2" > Proses </option> 
            <option value="3" > Solved </option> 
          </select>
        </div>
        
        <div class="col-sm-5">
            <label for="solved">Keterangan Penyelesaian </label><br>
            <textarea name="solved" class="form-control" rows="7">{{ $data->solved }}</textarea>
        </div>

        

        <input type="submit" name="update" value="Simpan" class="btn btn-primary" style="margin-top: 30px; margin-right: 20px; margin-left: 15px">
        <a href="/helpdesk" class="btn btn-dark" style="margin-top: 30px; margin-right: 20px">Kembali</a>
        
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