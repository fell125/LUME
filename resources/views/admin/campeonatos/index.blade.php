@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					Campeonatos
					<a href="{{ route('campeonatosAdmin.create') }}" class="btn btn-sm btn-primary pull-right" style="font-size: 1.5rem;">
					 	Adicionar
					</a>
				</div>	

				<div class="panel-body">

					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th width="10px">ID</th>
								<th>Nome</th>
								<th colspan="3">&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							@foreach($campeonatos as $campeonato)
							<tr>
								<td>{{ $campeonato->id }}</td>
								<td>{{ $campeonato->name }}</td>
								<td width="10px">
									<a href="{{ route('campeonatosAdmin.show', $campeonato->id) }}" class="btn btn-sm btn-default" style="font-size: 1.5rem;">
										<span class="glyphicon glyphicon-search"></span>
									</a>
								</td>
								<td width="10px">
									<a href="{{ route('campeonatosAdmin.edit', $campeonato->id) }}" class="btn btn-sm btn-default" style="font-size: 1.5rem;">
										<span class="glyphicon glyphicon-edit"></span>
									</a>
								</td>
								<td width="10px">
									{!! Form::open(['route' => ['campeonatosAdmin.destroy', $campeonato->id], 'method' => 'DELETE']) !!}
									<button class="btn btn-sm btn-danger" style="font-size: 1.5rem;">
										<span class="glyphicon glyphicon-trash"></span>
									</button>

									{!! Form::close() !!}
								</td>
							</tr>
							@endforeach
						</tbody>					
					</table>
					
			</div>
		</div>
		</div>
	</div>
</div>
@endsection