@extends('layouts.appbackend')
@section('content')
	<div class="card">
		<div class="card-header text-left"><i class="fa fa-university color_icon" aria-hidden="true"></i>
			{{ (isset($data)) ? 'Editar Isapre' : 'Registrar  Isapre ' }}
		</div>
			<form action="{{(isset($isapres)) ? route('isapres.update',$isapres->id) : route('isapres.add')}}" method="POST">
				{{ csrf_field() }}
				<div class="card-body text-left">
				<div class="form-group">
					 <label>Nombre isapre</label>
					<input type="text" class="form-control" name="name" value="{{(isset($isapres)) ? $isapres->name_isapre : ''}}">
				</div>
				<button class="btn  btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar</button>
			</form>
		</div>

		@if ($errors->any())
		    <div class=" text-left">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

	</div>
@endsection