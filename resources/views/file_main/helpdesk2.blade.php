@if(\Session::has('nip'))

@extends((\Session::has('nip'))?'/admin/sidebarhelpdesk':'/admin/nologin')
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
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-5" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body  ml-3  d-none d-lg-block">
                    <span class="mb-10 text-md  font-weight-bold">{{ Session::get('nama_officer') }}</span>
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
          </ul>
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
        <div class="col-responsive-sm-12">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-3">Tabel</h3>
            </div>
            <div>
               <!-- <label class="form-control-label" for="search"></label> -->
            </div>

            
            <div class = "form-group">
            <!-- Light table -->
            <div class="table-responsive-md-12">
              <!-- <table class="table align-items-center"> -->
                
                <table id="id_helpdesk" class="table table-hover table-striped datatable table table-sm">
                <thead class="thead-light">
                    {{ csrf_field() }}
                  <tr>
                    <!-- <th scope="col">No</th> -->
                    <th scope="col">ID</th>
                    <th scope="col">Nama Pegawai</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Divisi</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Masalah</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                 @if (session('success'))
                <!-- <div class="alert-success">
                  <p>{{ session('success') }}</p>
                </div> -->
                <div class="alert alert-success  alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">×</button>  
                    <strong>{{ session('success') }}</strong>
                </div>
                @endif

                @if (session('info'))
                <!-- <div class="alert-info">
                  <p>{{ session('info') }}</p>
                </div> -->
                 <div class="alert alert-info  alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">×</button>  
                    <strong>{{ session('info') }}</strong>
                </div>
                @endif

                @if (session('danger'))
                 <div class="alert alert-danger  alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">×</button>  
                    <strong>{{ session('danger') }}</strong>
                </div>
                @endif
                @if ($errors->any())
                 <div class="alert alert-warning  alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <ul>
                    @foreach ($errors->all() as $error)
                    <!-- <li>{{ $error }}</li> -->
                    @endforeach
                    <strong>Data tidak dapat ditambahkan karena data tidak lengkap</strong>
                  </ul>  
                    
                </div>
                @endif
                      @foreach($data as $a)
                      <tr>
                        <td class="text-wrap" scope="row">{{ $a->id_helpdesk }}</td>
                        <td scope="row">{{ $a->nama }}</td>
                        <td scope="row">{{ $a->tgl_pengajuan }}</td>
                        <td class="text-wrap" scope="row">{{ $a->divisi }}</td>
                        <td class="text-wrap" scope="row">{{ $a->kategori}}</td>
                        <td class="text-wrap" scope="row">{{ $a->ket_masalah}}</td>
                        <td scope="row">
                        <?php
                         if ($a->status == 0) {
                            echo "Waiting";
                        } elseif ($a->status == 1) {
                            echo "Pending";
                        } elseif ($a->status == 2) {
                            echo "Proses";
                        } elseif ($a->status == 3) {
                            echo "Solved";
                        } elseif ($a->status == 4) {
                          echo "Expired";
                        }
                        ?>  
                        </td>
                        <td scope="row" class="text-right">
                      	  <div class="dropdown">
                          	<a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          	  <i class="fas fa-ellipsis-v" style="margin-right:30px;"></i>
                        	  </a>
                        	<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="/helpdesk/editstatus/{{ $a->id_helpdesk }}">Update Status</a>
                            <a class="dropdown-item" href="/helpdesk/detailhelpdesk/{{ $a->id_helpdesk }}">Detail</a>
                            <a class="dropdown-item" href="/halamanadmin/hapus/{{ $a->id_helpdesk }}">Hapus</a>
                        </td>
                      </tr>
                      @endforeach
                      </tbody>
              </table>
              </div>
              <br>
        </div>
      </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
  <!-- Datatables -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <!-- Momentjs -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

  <script>
    $('#id_helpdesk').DataTable( {
      "pagingType": "numbers"
        } );
  </script>

</body>
@endsection
@else
<h1><i>Session Required</i></h1>
@endif