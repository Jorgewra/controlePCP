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
    <link href="{{url('/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{url('/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{url('/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{url('/css/sb-admin.css')}}" rel="stylesheet">
    <script src="{{url('/js/jquery-1.11.3.min.js')}}"></script>
    <script src="{{url('/js/jquery.mask.min.js')}}"></script>

  </head>
  <body id="page-top">
        @section('header')
         @include('painel.layouts.header')
        @show
        <div id="wrapper">
         <!-- Sidebar -->
         <ul class="sidebar navbar-nav">
         <li class="nav-item {{old('index')}}">
          <a class="nav-link" href="/pcp/{{App::getLocale()}}/painel">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{ $traducao['menu1']}}</span>
          </a>
        </li>        
        <li class="nav-item {{old('register')}}">
          <a class="nav-link" href="/pcp/{{App::getLocale()}}/registerOp">
            <i class="fas fa-fw fa-project-diagram"></i>
            <span>{{ $traducao['menu2']}}</span>
          </a>
        </li>
        <li class="nav-item {{old('product')}}">
          <a class="nav-link" href="/pcp/{{App::getLocale()}}/product">
            <i class="fas fa-fw fa-building"></i>
            <span>{{ $traducao['menu3']}}</span>
          </a>
        </li>
        <li class="nav-item {{old('process')}}">
          <a class="nav-link" href="/pcp/{{App::getLocale()}}/process">            
            <i class="fas fa-fw fa-sitemap"></i>
            <span>{{ $traducao['menu4']}}</span>
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
    <script src="{{url('/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{url('/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Page level plugin JavaScript-->
    <script src="{{url('/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{url('/vendor/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{url('/vendor/datatables/dataTables.bootstrap4.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{url('/js/sb-admin.min.js')}}"></script>
    <script src="{{url('/js/jquery.mask.min.js')}}"></script>
    <!--
    <script src="js/demo/datatables-demo.js"></script>-->

    </body>
</html>