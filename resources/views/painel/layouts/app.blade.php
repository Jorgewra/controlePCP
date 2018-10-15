<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

   <title>System PCP - @yield('title')</title>

    <!-- Bootstrap core CSS-->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">

  </head>
  <body id="page-top">
        @section('header')
         @include('painel.layouts.header')
        @show
        <div id="wrapper">
         <!-- Sidebar -->
         <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/painel">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>        
        <li class="nav-item">
          <a class="nav-link" href="/registerOp">
            <i class="fas fa-fw fa-project-diagram"></i>
            <span>Register OP</span>
          </a>
        </li>
      </ul>
      
        <div id="content-wrapper">

        <div class="container-fluid">
              @yield('content')       
      </div>
       <!-- Sticky Footer -->
       <footer class="sticky-footer">
             <div class="container my-auto">
                <div class="copyright text-center my-auto">
                <span>Copyright © System PCP 2018</span>
                </div>
            </div>
        </footer>

      </div>
     
      </div>
      <!-- /.content-wrapper -->
        <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>
    </body>
</html>