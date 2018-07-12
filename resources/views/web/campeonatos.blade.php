<title>Campeonatos</title>
@extends('layouts.app')

@section('content')

@if($back->first())
@foreach($back as $back)

<div class="div-img-fundo" style="background-image:url({{ $back->file }});">
	<div class="mascara">
		<h1 class="h1-titulo">CAMPEONATOS</h1>
	</div>
</div>
@endforeach()
@else
<div class="div-img-fundo" style="background-image:url('image/sk.jpeg');">
	<div class="mascara">
		<h1 class="h1-titulo">CAMPEONATOS</h1>
	</div>
</div>
@endif

<div class="container div-corpo">
	<div class="col-md-12">

		@if($back->first())
		@foreach($campeonatos as $campeonato)

		<div class="d-inline-block div-campeonatos">
			
			<div class="panel-body">
				<a class="quea" href="{{ route('campeonato', $campeonato->slug) }}">
					@if($campeonato->file)
					<div class="div-img-campeonato" style="background-image: url({{ $campeonato->file }});">					
					</div>
					@endif
				</a>					

				
				<div class="div-campeonato-nome">
					<a href="{{ route('campeonato', $campeonato->slug) }}">
						{{ $campeonato->name }}
					</a>
				</div>
				<a href="{{ route('campeonato', $campeonato->slug) }}">
					<p class="pull-right " id="data">{{ $campeonato->created_at->format('d/m') }}</p>
				</a>
			</div>
		</div>

		@endforeach()

		@else	
		
		<div class="d-inline-block div-campeonatos" style="margin-top: 100px;">
			
			<div class="panel-body">
				<div class="alert alert-danger">
				  <strong>Sem campeonatos no momento!</strong> Novidades em breve.
				</div>
			</div>
		</div>

		@endif

	</div> 
	<div class="col-md-12 div-paginacao">
		{{ $campeonatos->render() }}
	</div>
</div>

@endsection
