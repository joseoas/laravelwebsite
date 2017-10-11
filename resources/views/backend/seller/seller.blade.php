@extends('layouts.appbackend')
@section('content')
			<div class="row">
				<div class="col-md-12">
					       <div class="text-left "><h4> <i class="fa fa-address-card color_icon" aria-hidden="true"></i>  Vendedores </h4></div><br>

							<div class="card ">
									<div class="card-header">
										<div class="row">
											<div class="col-md-10 text-left">
												 Vendedores Registrados : <div class="badge badge-danger">{{$count}}</div>
											</div>
											<div class="col-md-2 text-right">
												<a class="btn btn-success" href="{{route('sellers.add')}}"> <i class="fa fa-plus" aria-hidden="true"></i> Nuevo Vendedor</a>
											</div>
										</div>
									</div>       
										<table class="table table-hover text-left ">
										  <thead >
										    <tr>
										      <th>#</th>
										      <th>Rut</th>
										      <th>Nombre</th>
										      <th>E-Mail</th>
										      <th>Isapre</th>
										      <th>Accion</th>
										    </tr>
										  </thead>
										  <tbody>

										    @foreach($sellers as $key=>$seller)
										    	    <tr>
												      <th scope="row">{{$key}}</th>
												      <td>{{$seller->rut_seller}}</td>
												      <td>{{$seller->name_seller." ".$seller->lastname_seller}}</td>
												      <td>{{$seller->email_seller}}</td>
												      <td>{{$seller->name_isapre}}</td>

												      	<td>
												      		<div class="row">
												      			<div class="col-md-4 text-lefet">
												      				<a href="{{route('sellers.edit',$seller->id)}}"	class="btn btn-info">
												      					<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar
												      				</a>
												      			</div>

												      			<div class="col-md-8 text-left">
												      				<form action="{{route('sellers.destroy',$seller->id)}}" method="POST">
															      		{{csrf_field()}}
															      		{{method_field('DELETE')}}
															      		<button class="btn btn-danger" type="submit"><i class="fa fa-eraser" aria-hidden="true"></i> Eliminar</button>
												      				</form>
												      			</div>

												      		</div>												
												      	</td>
											      	</tr>
										    @endforeach

										  </tbody>
									</table>
								</div> 

				</div><!--  FIN COL 7-->
				

			</div>

    {{ $sellers->links() }}
		
@endsection
