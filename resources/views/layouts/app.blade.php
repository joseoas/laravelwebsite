<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Cotiza Isapre Chile</title>

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/cover.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/mycss.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('fontawesome/css/font-awesome.min.css')}}">

    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>

        <!-- End Styles -->
    </head>
    <body>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top " >
                <div class="container">
                      <a class="navbar-brand" href="#">
                      <img src="{{asset('images/logo.png')}}" height="40px" width="41px" alt="cotiza isapre chile"> Cotiza<strong>IsapreChile</strong>
                      </a>

                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                          <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Quienes somos</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Nuestros Servicio</a>
                          </li>

                            <li class="nav-item">
                            <a class="nav-link" href="#">Contacto</a>
                          </li>                                                   
                        </ul>
                        
                         
                        </div>

                      </div>
                </div>
             </nav>

    <div class="site-wrapper">

          <div class="site-wrapper-inner">

          <div class=" marin ">
              
              @yield('content')
              
          </div>

        </div>
    </div>

    <hr>
    <div class="container">
          <div class="row">
            <div class="col-md-1 text-left">
                  <img src="{{asset('images/logo.png')}}" height="68" width="70" alt="cotiza isapre chile">
            </div>
            <div class="col-md-4 text-left">
                <h3>Cotiza<strong>IsapreChile</strong></h3>
                www.cotizaisaprechile.cl
            </div>

            <div class="col-md-4 text-left">
                 <strong>Email</strong>: Contacto@cotizaisaprechile.cl <br>
                 <strong>Fono</strong>: (2)5657657
            </div>

            <div class="col-md-3 text-right">

            </div>



          </div>
    </div>
    <br>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

    </body>
</html>
