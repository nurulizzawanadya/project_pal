<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link rel="icon" href={!! asset('assets/img/brand/favicon.png') !!} type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href={!! asset('assets/vendor/nucleo/css/nucleo.css') !!}  type="text/css">
  <link rel="stylesheet" href={!! asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') !!} type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href={!! asset('assets/css/argon.css?v=1.2.0') !!} type="text/css">

  <style>
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: #4CAF50;} /* Green */
.button2 {background-color: #008CBA;} /* Blue */
</style>
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src={!! asset('assets/img/brand/palz.jpeg') !!} width="1000" height="900" class="navbar-brand-img" alt="...">
        
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/form">
                <i class="ni ni-collection text-primary"></i>
                <span class="nav-link-text">Form Input Trouble</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/pilihantrian">
                <i class="ni ni-bullet-list-67 text-orange"></i>
                <span class="nav-link-text">Cek Antrian</span>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="/antriannip">
                <i class="ni ni-bullet-list-67 text-primary"></i>
                <span class="nav-link-text">Cek Antrian by NIP</span>
              </a>
            </li> -->
            
          </ul>
        
        </div>
      </div>
    </div>
  </nav>
  @yield('konten')
  <!-- Argon Scripts -->
  <!-- Core -->
  <!-- <script src="../assets/vendor/jquery/dist/jquery.min.js"></script> -->
  <!-- <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->
  <!-- <script src="../assets/vendor/js-cookie/js.cookie.js"></script> -->
  <!-- <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script> -->
  <!-- <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script> -->
  <!-- Argon JS -->
  <!-- <script src="../assets/js/argon.js?v=1.2.0"></script> -->
</body>

</html>