@extends('layouts.appbackend')

@section('content')
			<div class="row">
				<div class="col-md-12">
					       <div class="text-left "><h4> <i class="fa fa-university color_icon" aria-hidden="true"></i>  Isapre </h4></div><br>

							<div class="card ">
									<div class="card-header">
										<div class="row">
											<div class="col-md-10 text-left">
												 Cantidad total Isapres : <div class="badge badge-danger">{{$count}}</div>
											</div>
											<div class="col-md-2 text-right">
												<a class="btn btn-success" href="{{route('isapres.create')}}"> <i class="fa fa-plus" aria-hidden="true"></i> Nueva isapre</a>
											</div>
										</div>
									</div>       
										<table class="table table-hover text-left ">
										  <thead >
										    <tr>
										      <th>#</th>
										      <th>Nombre</th>
										      <th>Fecha Creacion</th>
										      <th>Ultima Actualizacion</th>
										      <th>Accion</th>
										    </tr>
										  </thead>
										  <tbody>

										  	@foreach($isapres as $key=>$isapre)
										    	    <tr>
												      <th scope="row">{{$key}}</th>
												      <td>{{$isapre->name_isapre}}</td>
												      <td>{{$isapre->created_at}}</td>
												      <td>{{$isapre->updated_at}}</td>

												      <td>
												      	
												      		

												      		
												      				<form action="{{route('isapres.destroy',$isapre->id)}}" method="POST">
															      		{{csrf_field()}}
															      		{{method_field('DELETE')}}

												      				<a href="{{route('isapres.edit',$isapre->id)}}"	class="btn btn-info btn-sm">
												      					<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar
												      				</a>
															      		<button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-eraser" aria-hidden="true"></i> Eliminar</button>
												      				</form>
												      			

												

												      </td>
											      	</tr>
										    @endforeach

										  </tbody>
									</table>
								</div> 

				</div><!--  FIN COL 7-->
				

			</div>

    {{ $isapres->links() }}
		
@endsection