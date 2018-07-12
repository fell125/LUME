@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					Editar Categoria
					<button class="btn btn-md btn-primary pull-right" onclick="goBack()">Cancelar</button>

					<script>
					function goBack() {
					    window.history.back();
					}
					</script>
				</div>	

				<div class="panel-body">
					{!! Form::model($category, ['route' => ['categories.update', $category->id], 
					'method' => 'PUT']) !!}

						@include('admin.categories.partials.form')

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection