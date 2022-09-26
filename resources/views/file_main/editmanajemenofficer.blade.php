@extends('admin/sidebaradmin')
@section('konten')
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="form-group mb-0">
                <h1 style="color:white; margin-top: 10px; margin-left: 10px;">Manajemen Officer</h1>
            </div>
          <!-- Navbar links -->
          <!-- <ul class="navbar-nav align-items-center  ml-md-auto ">
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
          </ul> -->
        </div>
      </div>
    </nav>
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
              <h3 class="mb-3">EDIT OFFICER</h3>
            </div>
            <!-- <div>
                <button type="submit" style="margin-left: 9px" class="btn btn-md btn-primary" >TAMBAH DATA USER</button>
            </div> -->
            <div class = "form-group">

            <!-- Light table -->
            <div class="table-responsive-md">
            <form action="{{url('/updatemanajemenofficer/'.$manajemenofficer->id )}}" method="post">
                {{ csrf_field() }}
                <div class="col-sm-4">
                    <!-- <label for="id_officer">ID Officer</label> -->
                    <input type="hidden" class="form-control" id="id_officer" name="id_officer" required="required" value="{{$manajemenofficer->id_officer}}" readonly>
                </div>
                <br>
                <div class="col-sm-4">
                    <label for="nip">NIP</label>
                    <input type="text" class="form-control" id="nip" name="nip" required="required" value="{{$manajemenofficer->nip}}" readonly>
                </div>
                <br>
                <div class="col-sm-4">
                    <label for="nama_officer">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama_officer" required="required" value="{{$manajemenofficer->nama_officer}}">
                </div>
                <br>
                <div class="col-sm-4">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required="required" value="{{$manajemenofficer->username}}">
                </div>
                <br>
                <div class="col-sm-4">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" required="required" value="{{$manajemenofficer->email}}">
                </div>
                <div class="col-sm-4">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" id="password" name="password" required="required" value="{{$manajemenofficer->password}}">
                </div>
                <div class="col-sm-4">
                <!-- <label for="officer_status">Officer Status</label> -->
                    <input type="hidden" class="form-control" id="officer_status" name="officer_status" required="required" value="0">
                </div>
                <br>
                <div>
                    <input type="submit" name="update" value="update" class="btn btn-primary" style="margin-top: 30px; margin-right: 20px; margin-left: 15px">
                    <a href="{{url('/halamanmanajemenofficer')}}" class="btn btn-warning" style="margin-top: 30px; margin-right: 20px">Kembali</a>
                </div>
            </form>
            </div>
            <!-- Card footer -->
            <!-- <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div> -->
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
</body>
@endsection