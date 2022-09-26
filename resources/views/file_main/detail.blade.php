<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Halaman Admin</title>
  <!-- Favicon -->
  <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
  <style>
        td, th 
        {
          text-align: center;
          width: 1%;
        }
  </style>
</head>

<body>
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
              <div class="col-md-4" style="margin-left:800px; margin-top:-50px">
                  <select name="status" id="status" class="form-control input-lg dynamic"  data-dependent="status">
                      <option value="">Solved</option>
                      <option value="">Proses</option>
                      <option value="">Pending</option>
                  </select>
            </div>
            </div>

            
            <div class = "form-group">

            <br>
            <!-- Light table -->
            <div class="table-responsive-md">
              <!-- <table class="table align-items-center"> -->
                
              <table class="table align-items-center table-flush">
              {{ csrf_field() }}
                <!-- <thead class="thead-light">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">User</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Insiden</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                  </tr>
                </thead> -->
                <tbody>
                {{ csrf_field() }}
                      @foreach($detail_kategori as $dta)
                      <tr>
                      <td>NIP</td>
                      <td>{{ $dta->nip }}</td>
                      </tr>
                      <tr>
                      <td>Tanggal Pengajuan</td>
                      <td>{{ $dta->tgl_pengajuan}}</td>
                      </tr>
                      <tr>
                      <td>Detail Kategori</td>
                      <td>{{ $dta->detail_kategori }}</td>
                      </tr>
                      <tr>
                      <td>Masalah</td>
                      <td>{{ $dta->ket_masalah }}</td>
                      </tr>
                      <tr>
                      <td>Solved</td>
                      <td>{{ $dta->solved }}</td>
                      </tr>
                      <tr>
                      <td>Status</td>
                      <td>{{ $dta->status }}</td>
                      </tr>
                      @endforeach
                </tbody>
              </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
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
</body>

</html>