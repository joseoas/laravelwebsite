@extends('layouts.appbackend')

@section('content')
			<div class="row">
				<div class="col-md-12">
					       <div class="text-left "><h4> <i class="fa fa-university color_icon" aria-hidden="true"></i>  Emails </h4></div><br>

							<div class="card ">
									<div class="card-header">
										<div class="row">
											<div class="col-md-10 text-left">
												 Cantidad total Emails : <div class="badge badge-danger">{{$count}}</div>
											</div>
											<div class="col-md-2 text-right">
											
											</div>
										</div>
									</div>       
										<table class="table table-hover text-left ">
										  <thead >
										    <tr>
										      <th>#</th>
										      <th>Nombre</th>
										      <th>Email</th>
										      <th>Fono</th>
										      <th>Fecha</th>
										      <th>Accion</th>

										    </tr>
										  </thead>
										  <tbody>

										  	@foreach($emails as $key=>$email)
										    	    <tr>
												      <th scope="row">{{$key}}</th>
												      <td>{{$email->name_email}}</td>
												      <td>{{$email->email_email}}</td>
												      <td>{{$email->phone_email}}</td>
												      <td>{{$email->created_at}}</td>
												      <td>

												      <form action="#" method="POST">
													      	<a href="#"	class="btn btn-success btn-sm">
													      		<i class="fa fa-envelope-open" aria-hidden="true"></i> Ver
													      	</a>
													      			
													      	<a href="#"	class="btn btn-info btn-sm">
													      		<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar
													      	</a>
															{{csrf_field()}}
															{{method_field('DELETE')}}
															<button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-eraser" aria-hidden="true"></i> Eliminar</button>
												      </form>
												      		

												      		</div>
												

												      </td>
											      	</tr>
										    @endforeach

										  </tbody>
									</table>
								</div> 

				</div><!--  FIN COL 7-->
				

			</div>

    {{ $emails->links() }}
		
@endsection