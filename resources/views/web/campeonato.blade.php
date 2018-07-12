<title>{{$campeonato->name}}</title>
@extends('layouts.app')

@section('content')

<div class="div-img-fundo" style="background-image:url({{ $campeonato->file }});">
	<div class="mascara">
		<h1 class="h1-titulo">{{ $campeonato->name }}</h1>
	</div>

</div>


<div class="container">

		<div class="panel panel-default panel-noticia">
			<div class="panel-body noticia-principal" style="font-size: 1.8rem;">
				<p class="acessoria"> <span class="glyphicon glyphicon-user"></span> por Assessoria LUME &nbsp; <span class="glyphicon glyphicon-calendar"></span> {{ $campeonato->created_at->format('d') }} de 
				@if($campeonato->created_at->format('m') == '01')
				janeiro
				@elseif($campeonato->created_at->format('m') == '02')
				fevereiro
				@elseif($campeonato->created_at->format('m') == '03')
				março
				@elseif($campeonato->created_at->format('m') == '04')
				abril
				@elseif($campeonato->created_at->format('m') == '05')
				maio
				@elseif($campeonato->created_at->format('m') == '06')
				junho
				@elseif($campeonato->created_at->format('m') == '07')
				julho
				@elseif($campeonato->created_at->format('m') == '08')
				agosto
				@elseif($campeonato->created_at->format('m') == '09')
				setembro
				@elseif($campeonato->created_at->format('m') == '10')
				outubro
				@elseif($campeonato->created_at->format('m') == '11')
				novembro
				@elseif($campeonato->created_at->format('m') == '12')
				dezembro
				@endif

				de {{ $campeonato->created_at->format('Y') }}
				</p>

				<h1 class="h1-titulo-noticia">{{ $campeonato->excerpt }}</h1>
				@if($campeonato->file)
				<img src="{{ $campeonato->file }}" clas="img-responsive" style="width: 100%;">
				@endif
				<hr>
				{!! $campeonato->body !!}

			</div>
		</div>

		<div class="fb-comments" data-href="https://www.lume.com.br/campeonatos/{{ $campeonato->slug }}" data-numposts="5" data-width="100%"></div>
</div>

@endsection