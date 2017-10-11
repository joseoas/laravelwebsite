@extends('layouts.app')
@section('content')

<div class="container">
  
   <div class="row">

              <div class="col-md-6">
                      <div class="inner">
                                    <h2 class="text-left">
                                        Cotiza
                                        <span class="badge badge-danger">GRATIS</span>
                                       y sin compromiso
                                    </h2><br>

                                    
                                    <p class="lead text-left">
                                        Somos una empresa que tiene un enlace directo con vendedores oficiales de isapre de todas las sucursales del país. Llena el formulario, compara y adhiérete a la isapre que se ajuste a tus necesidades.
                                        <hr>
                                    </p>
                                    <img src="{{asset('images/img.png')}}" width="265" height="150">
                                    <div class="row text-left">
                                        <div class="col-md-1 ">
                                              <h4><span class="red">1</span></h4>
                                        </div><!--FIN col inf-->

                                        <div class="col-md-11 text-left">
                                             <p class="lead"> Selecciona las isapres en las cuales te interesa cotizar</p>
                                        </div><!--FIN col inf-->
                                    </div><!--FIN ROW-->

                                    <div class="row text-left">
                                        <div class="col-md-1 ">
                                              <h4><span class="red">2</span></h4>
                                        </div><!--FIN col inf-->

                                        <div class="col-md-11 text-left">
                                             <p class="lead">Ingrese la información solicitada</p>
                                        </div><!--FIN col inf-->
                                    </div><!--FIN ROW-->

                                    <div class="row text-left">
                                        <div class="col-md-1 ">
                                              <h4><span class="red">3</span></h4>
                                        </div><!--FIN col inf-->

                                        <div class="col-md-11 text-left">
                                             <p class="lead">  Eso es todo!! </p>
                                        </div><!--FIN col inf-->
                                    </div><!--FIN ROW-->

                                     <div class="row text-left">
                                        <div class="col-md-1 ">
                                              <h4><span class="red">4</span></h4>
                                        </div><!--FIN col inf-->

                                        <div class="col-md-11 text-left">
                                             <p class="lead">  Los ejecutivo tomara contacto con usted </p>
                                        </div><!--FIN col inf-->
                                    </div><!--FIN ROW-->



                            </div><!--FIN INNER-->
              </div><!--FIN COL MD 6-->

          <div class="col-md-6">
                            <div class="row">  
                                <div class="col">
                                      <h2 class="text-left">Complete este Formulario </h2><br>
                                </div>
                            </div>
                            <form action="{{route('emails.add')}}" method="post">
                                  {{csrf_field()}}

                                  <div class="row text-left">
                                        <div class="col">
                                             <p class="lead">Selecciones las isapre a las cuales decea cotizar</p>
                                        </div>  

                                 </div>
                                <div class="row text-left">
                                        <div class="col">
                                                <button id="banmedica" type="button" class="btn btn-danger btn-sm margen">Banmedica</button> 
                                                 <button id="colmena"  type="button" class="btn btn-danger btn-sm margen">Colmena</button>
                                                <button id="consalud"   type="button" class="btn btn-danger btn-sm margen">ConSalud</button>
                                                <button id="cruzblanca"   type="button" class="btn btn-danger btn-sm margen">CruzBlanca</button>
                                                <button id="vidatres"  type="button"  class="btn btn-danger btn-sm margen">VidaTres</button>
                                        </div>  

                                        <div id="inputbanmedica"><input type="hidden" name="banmedica" value="0"></div>
                                        <div id="inputcolmena"><input type="hidden" name="colmena" value="0"></div>
                                        <div id="inputconsalud"><input type="hidden" name="consalud" value="0"></div>
                                        <div id="inputcruzblanca"><input type="hidden" name="cruzblanca" value="0"></div>
                                        <div id="inputvidatres"><input type="hidden" name="vidatres" value="0"></div>
                                        <div id="inputmasvida"><input type="hidden" name="masvida" value="0"></div>

                                 </div>
                                 <script type="text/javascript">
                                   $(document).ready(function (){
                                    var banmedica=0;
                                    var colmena=0;
                                    var consalud=0;
                                    var cruzblanca=0;
                                    var vidatres=0;
                                    var masvida=0;

                                      $('#banmedica').click(function(){
                                          if(banmedica==0){
                                            $('#banmedica').removeClass('btn-danger');
                                            $('#banmedica').addClass('btn-success');
                                            $('#inputbanmedica').html('<input type="hidden" name="banmedica" value="1" >');
                                            banmedica=1;
                                          }
                                          else{                                            
                                            $('#banmedica').removeClass('btn-success');
                                            $('#banmedica').addClass('btn-danger');
                                            $('#inputbanmedica').html('<input type="hidden" name="banmedica" value="0">');
                                            banmedica=0;

                                          }

                                      });

                                       $('#colmena').click(function(){
                                          if(colmena==0){
                                            $('#colmena').removeClass('btn-danger');
                                            $('#colmena').addClass('btn-success');
                                            $('#inputcolmena').html('<input type="hidden" name="colmena" value="1">');

                                            colmena=1;
                                          }
                                          else{                                            
                                            $('#colmena').removeClass('btn-success');
                                            $('#colmena').addClass('btn-danger');
                                            $('#inputcolmena').html('<input type="hidden" name="colmena" value="0">');

                                            colmena=0;

                                          }

                                      });


                                        $('#consalud').click(function(){
                                          if(consalud==0){
                                            $('#consalud').removeClass('btn-danger');
                                            $('#consalud').addClass('btn-success');
                                            $('#inputconsalud').html('<input type="hidden" name="consalud" value="1">');

                                            consalud=1;
                                          }
                                          else{                                            
                                            $('#consalud').removeClass('btn-success');
                                            $('#consalud').addClass('btn-danger');
                                            $('#inputconsalud').html('<input type="hidden" name="consalud" value="0">');

                                            consalud=0;

                                          }

                                      });


                                         $('#cruzblanca').click(function(){
                                          if(cruzblanca==0){
                                            $('#cruzblanca').removeClass('btn-danger');
                                            $('#cruzblanca').addClass('btn-success');
                                            $('#inputcruzblanca').html('<input type="hidden" name="cruzblanca" value="1">');
                                            cruzblanca=1;
                                          }
                                          else{                                            
                                            $('#cruzblanca').removeClass('btn-success');
                                            $('#cruzblanca').addClass('btn-danger');
                                            $('#inputcruzblanca').html('<input type="hidden" name="cruzblanca" value="0">');

                                            cruzblanca=0;

                                          }

                                      });

                                            $('#vidatres').click(function(){
                                          if(vidatres==0){
                                            $('#vidatres').removeClass('btn-danger');
                                            $('#vidatres').addClass('btn-success');
                                            $('#inputvidatres').html('<input type="hidden" name="vidatres" value="1">');

                                            vidatres=1;
                                          }
                                          else{                                            
                                            $('#vidatres').removeClass('btn-success');
                                            $('#vidatres').addClass('btn-danger');
                                            $('#inputvidatres').html('<input type="hidden" name="vidatres" value="0">');

                                            vidatres=0;

                                          }

                                      });

                                          $('#masvida').click(function(){
                                          if(masvida==0){
                                            $('#masvida').removeClass('btn-danger');
                                            $('#masvida').addClass('btn-success');
                                            $('#inputmasvida').html('<input type="hidden" name="masvida" value="1">');

                                            masvida=1;
                                          }
                                          else{                                            
                                            $('#masvida').removeClass('btn-success');
                                            $('#masvida').addClass('btn-danger');
                                            $('#inputmasvida').html('<input type="hidden" name="masvida" value="0">');

                                            masvida=0;

                                          }

                                      });
                                   });  

                                 </script>
                                    <br>
                                  <div class="row text-left">

                                        <div class="col">

                                                <button id="masvida"  type="button" class="btn btn-danger btn-sm margen2">Nueva MasVida</button>
                                        </div>  

                                 </div>


                                   <div class="row">
                                      <div class="col">
                                          <input type="text" name="nombre" class="form-control" placeholder="Nombre Completo"><br>
                                     </div>
                                 </div>

                                  <div class="row">
                                            <div class="col">
                                                  <input type="text" name="telefono" class="form-control" placeholder="Telefono"><br>
                                            </div>
                                            <div class="col">
                                                  <input type="text" name="email" class="form-control" placeholder="E-Mail"><br>
                                            </div> 
                                  </div><!--FIN ROW2-->

                                  <div class="row">
                                      <div class="col">
                                             <input type="text" name="ciudad" class="form-control" placeholder="Ciudad y Comuna"><br>
                                     </div>
                                  </div>

                                  <div class="row">
                                      <div class="col">
                                              <textarea  type="text" name="contenido" placeholder=" Cuentanos tu caso" class="form-control"  rows="5" ></textarea>
                                     </div>
                                  </div>
                                  <br>
                                  <div class="row">
                                      <div class="col">
                                          <p class="lead text-left">
                                            <button type="submit" class="btn btn-lg btn-outline-success"> <i class="fa fa-paper-plane" aria-hidden="true"> </i> Solicitar Cotizacion</button>
                                          </p>
                                     </div>
                                  </div>

                               
                            </form>
                            @if ($errors->any())
                              <div class=" text-left">
                                  <ul>
                                      @foreach ($errors->all() as $error)
                                          <li>{{ $error }}</li>
                                      @endforeach
                                  </ul>
                              </div>
                          @endif
              </div> <!-- COL-MD-6 -->

            </div> <!-- FIN ROW-->
</div><!--FIN CONTAINER-->

               <hr>

              <div class="jumbotron jumbotron-fluid">
                <h1 class="display-4">¿Quienes somos?</h1>
                <div class="container">
                <p class="lead">Somos un grupo de ingenieros y técnicos, que tienen por objetivo principal el facilitar a la comunidad cotizaciones de isapres de forma rápida sencilla y totalmente gratis, sin tener que acudir a una sucursal, ni hacer turnos de espera, nuestro objetivo es ofrecer un servicio ágil e integral a todos nuestros visitantes, para lo cual nos encontramos abierto a sugerencias y aportes de terceros con la única finalidad entregar un mejor servicio.</p>
                </div>
            </div>

            <h1 class="display-4">Nuestro Servicio</h1>
        <div class="container">
            <p class="lead">
              Este Servicio consiste en  una plataforma online que permite a la comunidad obtener información de forma rápida y sencilla en relación a los planes de isapre disponibles y de esta forma facilitarles  un abanico de alternativas en donde el visitante es libre de escoger la isapre que más se ajuste a sus necesidades.
            </p>
            <br>
            <div class="row ">
                <div class="col">
                    <h1><i class="fa fa-bolt fa-3x color_icon" aria-hidden="true"></i></h1>
                    <p class="lead"><strong>Rápido</strong></p>
                </div>
                <div class="col">
                    <h1><i class="fa fa-sign-language fa-3x color_icon" aria-hidden="true"></i></h1>
                    <p class="lead"><strong>Fácil</strong></p>
                </div>
                <div class="col">
                    <h1><i class="fa fa-unlock-alt fa-3x color_icon" aria-hidden="true"></i></h1>
                    <p class="lead"><strong>Seguro</strong></p>
                </div>
                  <div class="col">
                    <h1><i class="fa fa-handshake-o fa-3x color_icon" aria-hidden="true"></i></h1>
                    <p class="lead"><strong>Profesional</strong></p>
                </div>

            </div>
        </div><!--FIN CONTAINER-->
        <br><br><br>
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
             <h1 class="display-4">Isapres</h1>
            <hr>

            <div class="row text-center">

              <div class="col">
                    <img src="{{asset('images/banmedica.png')}}" height="50" width="180">
              </div>

              <div class="col">
                <img src="{{asset('images/cruzblanca.png')}}" height="50" width="180">
              </div>

              <div class="col">
                 <img src="{{asset('images/vidatres.png')}}" height="50" width="180">
              </div>

            </div>
              <br><br>
             <div class="row text-center">

              <div class="col">
                    <img src="{{asset('images/colmena.png')}}" height="50" width="180">
              </div>
              
              <div class="col">
                <img src="{{asset('images/consalud.png')}}" height="50" width="180">
              </div>

              <div class="col">
                 <img src="{{asset('images/masvida.png')}}" height="50" width="180">
              </div>

            </div>
        </div><!--FIN CONTAINER-->
        </div>
<br>
<br><br>
@endsection

