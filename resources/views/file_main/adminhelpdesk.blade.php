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
        <div class="col-responsive-sm">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <!-- <h3 class="mb-3">Tabel</h3> -->
              <div class="col-md-3" style="margin-left:760px; margin-top:-50px">
            </div>
            <br></br>
            <div class="row">
            <div class="col-md-12 mt-3">
              <form action=" {{ url('halamanadmin/records') }} " method="post">
              @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info text-white" id="basic-addon1"><i
                                        class="fas fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" name="start_date" id="start_date" placeholder="Start Date" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info text-white" id="basic-addon1"><i
                                        class="fas fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" name="end_date" id="end_date" placeholder="End Date" readonly>
                        </div>
                    </div>
                </div>
                <div>
                    <input type="submit" class="btn btn-outline-info btn-sm" value="Filter"></input>
                    <a class="btn btn-outline-warning btn-sm" href="{{url('/halamanadmin')}}" >Reset</a>
                </div>
              </form>
            </div>  

            
            <div class = "form-group">

            <br>
            <!-- Light table -->
            <div class="table">
              <!-- <table class="table align-items-center"> -->
                
                <table id="records" class="table table-hover table-striped datatable table table-sm">
                <thead class="thead-light">
                    {{ csrf_field() }}
                  <tr>
                    <th scope="col">No</th> 
                    <!-- <th scope="col">Id Helpdesk</th> -->
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

                      @foreach($admin as $a)
                      <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td scope="row">{{ $a->user->nama }}</td>
                        <td scope="row">{{ $a->tgl_pengajuan }}</td>
                        <td class="text-wrap" scope="row">{{ $a->divisi->divisi }}</td>
                        <td class="text-wrap" scope="row">{{ $a->detail_kategori->kategori->kategori}}</td>
                        <td class="text-wrap" scope="row">{{ $a->detail_kategori->detail}}</td>
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
                          <a class="dropdown-item" href="{{url('/halamanadmin/detail/'.$a->id_helpdesk)}}">Detail</a>
                           <a class="dropdown-item" href="{{url('/halamanadmin/hapus/'.$a->id_helpdesk)}}" onclick="return confirm('apakah anda yakin untuk menghapus?')">Hapus</a>
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
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <!-- Datatables -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
  <script type="text/javascript"
      src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <!-- Momentjs -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  

<script>
        $(function() {
            $("#start_date").datepicker({
                "dateFormat": "yy-mm-dd"
            });
            $("#end_date").datepicker({
                "dateFormat": "yy-mm-dd"
            });
        });

        $('#records').DataTable( {

        dom: "<'row'<'col-sm-15 col-sm'l><'col-sm-15 col-sm'B><'col-sm-15 col-sm'f>>" +
                          "<'row'<'col-sm-12'tr>>" + //buat pagination
                          "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>", //buat pagination
        buttons: [
            'copy', 'excel', 'pdf', 'print'
        ]
        } );

        //Fetch records
        function fetch(start_date, end_date) {
          console.log(start_date);
          console.log(end_date);
            $.ajax({
                url: "{{ route('halamanadmin/records') }}",
                type: "get",
                data: {
                    start_date: start_date,
                    end_date: end_date
                },
                dataType: "json",
                success: function(data) {
                    // Datatables
                    var i = 1;
                    $('#records').DataTable({
                        "data": data.admin,
                        // responsive
                        "responsive": true,
                        "columns": [{
                                "data": "id",
                                "render": function(data, type, row, meta) {
                                    return i++;
                                }
                            },
                            {
                                "data": "name"
                            },
                            {
                                "data": "standard",
                                "render": function(data, type, row, meta) {
                                    return `${row.standard}th Standard`;
                                }
                            },
                            {
                                "data": "percentage",
                                "render": function(data, type, row, meta) {
                                    return `${row.percentage}%`;
                                }
                            },
                            {
                                "data": "result"
                            },
                            {
                                "data": "created_at",
                                "render": function(data, type, row, meta) {
                                    return moment(row.created_at).format('DD-MM-YYYY');
                                }
                            }
                        ]
                    });
                }
            });
        }

         fetch();

        // Filter
        $(document).on("click", "#filter", function(e) {
            e.preventDefault();
            var start_date = $("#start_date").val();
            var end_date = $("#end_date").val();
            if (start_date == "" || end_date == "") {
                alert("Both date required");
            } else {
                $('#records').DataTable().destroy();
                fetch(start_date, end_date);
            }
        });

        // Reset
        $(document).on("click", "#reset", function(e) {
            e.preventDefault();
            $("#start_date").val(''); // empty value
            $("#end_date").val('');
            $('#records').DataTable().destroy();
            fetch();
        });


    </script> 
</body>
@endsection

