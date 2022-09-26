@extends('admin/sidebaradmin')
@section('konten')
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="form-group mb-0">
                <h1 style="color:white; margin-top: 10px; margin-left: 10px;">Detail Kategori </h1>
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
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-3">Tabel</h3>
               <a class="btn btn-md btn-primary" href="{{url('/detailkategori/tambah/')}}">Tambah Data Detail Kategori</a>
              <div class="col-md-4" style="margin-left:690px; margin-top:-50px">
            </div>
            </div>

           
            <div class = "form-group">
              <br>

            <br>
            <!-- Light table -->
            <div class="table-responsive-md">
              <!-- <table class="table align-items-center"> -->
                
                <table id="id_detail" class="table table-hover table-striped datatable table table-sm">  
                <thead class="thead-light">
                    {{ csrf_field() }}
                  <tr>
                    <!-- <th scope="col">No</th> -->
                    <th scope="col">Nomor</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Detail Kategori</th>
                    <th scope="col">Aksi</th>
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
                <!-- <div class="alert-danger">
                  <p>{{ session('danger') }}</p>
                </div> -->
                 <div class="alert alert-danger  alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">×</button>  
                    <strong>{{ session('danger') }}</strong>
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
                      @foreach($detail_kategori as $dk)
                      
                      <tr>
                        <td class="text-wrap" scope="row">{{ $dk->id_detail }}</td>
                        <td class="text-wrap" scope="row">{{ $dk->kategori->kategori }}</td>
                        <td class="text-wrap" scope="row">{{ $dk->detail }}</td>
                        
                        <td class="text-wrap" scope="row" class="text-right">
                             <a class="btn btn-sm btn-primary" href="{{url('/detailkategori/edit/'.$dk->id_detail)}}">Edit</a>
                             <a class="btn btn-sm btn-danger" href="{{url('/detailkategori/hapus/'.$dk->id_detail)}}" onclick="return confirm('apakah anda yakin untuk menghapus?')">Hapus</a>
                        
                        </td>
                      </tr>
                      @endforeach
                </tbody>
              </table>
            </div>
          </div>
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
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
  <script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <!-- Momentjs -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

  <script>
    $('#id_detail').DataTable( {
      "pagingType": "numbers"
          } );
    </script>

@endsection