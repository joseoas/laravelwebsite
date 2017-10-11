<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Styles -->

    <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cover.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mycss.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/font-awesome.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">

</head>
<body class="fixed-nav" id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top bar" id="mainNav">
      <a class="navbar-brand" href="#"><img src="{{asset('images/logo.png')}}" height="28px" width="45px">cotiza<strong>isaprechile</strong></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav text-left">
          <li class="nav-item " data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link" href="#">
              <i class="fa fa-fw fa-dashboard color_icon"></i>
              <span class="nav-link-text">
                Dashboard</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
            <a class="nav-link" href="{{route('emails.index')}}">
              <i class="fa fa-envelope-o color_icon" aria-hidden="true"></i>
              <span class="nav-link-text">E-mail</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="{{route('sellers.index')}}">
              <i class="fa fa-address-card color_icon" aria-hidden="true"></i>
              <span class="nav-link-text">Vendedores</span>
            </a>
          </li>

          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="#">
              <i class="fa fa-money color_icon" aria-hidden="true"></i>
              <span class="nav-link-text">Pagos</span>
            </a>
          </li>


          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                <a class="nav-link" href="{{route('isapres.index')}}">
                <i class="fa fa-university color_icon" aria-hidden="true"></i>                  
                <span class="nav-link-text">Isapre</span>
                </a>
            </li>

 
        </ul>


        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              Administracion
            </a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto session_text">
          <li class="nav-item ">

            <a class="nav-link " data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-fw fa-sign-out"></i>Cerrar session</a>
          </li>
        </ul>

      </div>
    </nav>

    <div class="content-wrapper py-3">

      <div class="container-fluid">            
          @yield('content')
      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    


    <!-- Custom scripts for this template -->
    <script src="{{asset('js/sb-admin.min.js')}}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>


</body>
</html>
