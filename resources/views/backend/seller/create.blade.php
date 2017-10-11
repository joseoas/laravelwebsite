@extends('layouts.appbackend')
@section('content')

	<div class="text-left">  <i class="fa fa-address-card color_icon" aria-hidden="true"></i> Nuevo Vendedor</div>
	<br>
	<div class="card text-left">
		<div class="card-header"> Vendedor</div>
		<div class="card-body">
			<form action="{{ (isset($seller)) ?  route('sellers.update',$seller->id) :  route('sellers.input') }}" method="post">
				{{csrf_field()}}
					<div class="form-group text-left">
						<div class="row">
							<div class="col-md-4">
								<label>Rut</label>
								<input type="text" class="form-control" name="rut" value="{{ isset($seller) ? $seller->rut_seller : '' }}">
							</div>
							<div class="col-md-4">
								<label>Nombres</label>
								<input type="text"  class="form-control" name="nombre" value="{{isset($seller) ? $seller->name_seller : ''}}">
							</div>
							<div class="col-md-4">
								<label>Apellidos</label>
								<input type="text"  class="form-control" name="apellido" value=" {{ isset($seller) ? $seller->lastname_seller : '' }}">
							</div>
						</div><!--FIN ROW-->
					</div><!--FIN FORM-FROUP-->
					<div class="form-group text-left">
							<div class="row">
								<div class="col-md-6">
									<label>Telefono Celular</label>
									<input type="text" class="form-control" name="movil" value="{{ isset($seller) ? $seller->smartphone_seller : ''}}">
								</div>
								<div class="col-md-6">
									<label>Telefono Red Fija</label>
									<input type="text" class="form-control" name="fijo" value="{{ isset($seller) ? $seller->phone_seller : ''}}">
								</div>
							</div><!--FIN ROW2-->
					</div><!--FIN ROW-->
					<div class="form-group text-left">
							<div class="row">
								<div class="col-md-6">
									<label>Email</label>
									<input type="text" class="form-control" name="email" value="{{ isset($seller) ? $seller->email_seller : ''}}">
								</div>
								<div class="col-md-6">
									<label>Isapre</label>

										<select class="form-control" name="isapre">
											@foreach($isapres as $isapre)
											<option value="{{$isapre->id}}" {{ ($seller->id_isapre==$isapre->id) ? 'selected' : '' }} >{{$isapre->name_isapre}}</option>
											@endforeach
										</select>
							

								</div>
							</div><!--FIN ROW3-->
					</div><!--FIN ROW-->

					<div class="form-group">	
						<div class="row">
							<div class="col-md-6">
								<button class="btn btn-success"> <i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar</button>
							</div> 
							<div class="col-md-6"></div>
						</div><!--FIN ROW4-->
					</div><!--FIN FORM-GROUP-->	
			</form>
		</div><!--FIN CARD BODY-->	
	</div><!--FIN CARD-->


		@if ($errors->any())
		    <div class=" text-left">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
		
@endsection