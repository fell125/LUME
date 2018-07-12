<title>{{ $post->name }}</title>
@extends('layouts.app')

@section('content')

<div class="div-img-fundo" style="background-image:url({{ $post->file }});">
	<div class="mascara">
		<h1 class="h1-titulo">{{ $post->name }}</h1>
		<div class="row div-links">
			<div class="col-md-3">
				<a href="{!! url('categoria/league-of-legends') !!}">League of Legends</a>
			</div>
			<div class="col-md-3">
				<a href="{!! url('categoria/dota2') !!}">Dota 2</a>
			</div>
			<div class="col-md-3">
				<a href="{!! url('categoria/cs-go') !!}">CS:GO</a>
			</div>
			
			<div class="col-md-3">
				<div class="dropdown dropdown-custom">
				    <button class="dropdown-toggle button-custom" type="button" data-toggle="dropdown">Outros</button>
				    
				    <ul class="dropdown-menu">
				    @foreach($categories as $category)
				      <li><a href="{{ route('category',  $category->slug) }}">{{ $category->name }}</a></li>
				    @endforeach()
				    </ul>
					
			  </div>
			</div>
		
		</div>
	</div>

</div>



<div class="container">

		<div class="panel panel-default panel-noticia">
			<div class="panel-body noticia-principal" style="font-size: 1.8rem;">
				<p class="acessoria"> <span class="glyphicon glyphicon-user"></span> por Assessoria LUME &nbsp; <span class="glyphicon glyphicon-calendar"></span> {{ $post->created_at->format('d') }} de 
				@if($post->created_at->format('m') == '01')
				janeiro
				@elseif($post->created_at->format('m') == '02')
				fevereiro
				@elseif($post->created_at->format('m') == '03')
				março
				@elseif($post->created_at->format('m') == '04')
				abril
				@elseif($post->created_at->format('m') == '05')
				maio
				@elseif($post->created_at->format('m') == '06')
				junho
				@elseif($post->created_at->format('m') == '07')
				julho
				@elseif($post->created_at->format('m') == '08')
				agosto
				@elseif($post->created_at->format('m') == '09')
				setembro
				@elseif($post->created_at->format('m') == '10')
				outubro
				@elseif($post->created_at->format('m') == '11')
				novembro
				@elseif($post->created_at->format('m') == '12')
				dezembro
				@endif

				de {{ $post->created_at->format('Y') }}
				</p>

				<h1 class="h1-titulo-noticia">{{ $post->excerpt }}</h1>
				@if($post->file)
				<img src="{{ $post->file }}" clas="img-responsive" style="width: 100%;">
				@endif

				<figcaption class="legenda-foto">{{ $post->legenda }}</figcaption>
				<hr>
				{!! $post->body !!}

				<hr>
				<span class="glyphicon glyphicon-tags" style="color:#007FFF">&nbsp;</span>
				<a href="{{ route('category', $post->category->slug) }}">
					{{ $post->category->name }}
				</a>

			</div>
		</div>
		<h1>&nbsp;&nbsp;Notícias Recomendadas</h1>
		@foreach($tagsrecomendados as $tagsrecomendados)

		<div class="d-inline-block div-noticias">
			
			<div class="panel-body">
				<a href="{{ route('post', $tagsrecomendados->slug) }}">
					@if($tagsrecomendados->file)
					<div class="div-img-noticia" style="background-image: url({{ $tagsrecomendados->file }});">					
					</div>
					@endif
				</a>					

				
				<div class="div-titulo-noticia">
					<a href="{{ route('post', $tagsrecomendados->slug) }}">
						{{ $tagsrecomendados->name }}
					</a>
				</div>
				<a href="{{ route('post', $tagsrecomendados->slug) }}">
					<p class="pull-right" id="data">{{ $tagsrecomendados->created_at->format('d/m') }}</p>
				</a>
			</div>
		</div>

		@endforeach()	

		@foreach($categoriesrecomendados as $categoriesrecomendados)

		<div class="d-inline-block div-noticias">
			
			<div class="panel-body">
				<a href="{{ route('post', $categoriesrecomendados->slug) }}">
					@if($categoriesrecomendados->file)
					<div class="div-img-noticia" style="background-image: url({{ $categoriesrecomendados->file }});">					
					</div>
					@endif
				</a>					

				
				<div class="div-titulo-noticia">
					<a href="{{ route('post', $categoriesrecomendados->slug) }}">
						{{ $categoriesrecomendados->name }}
					</a>
				</div>
				<a href="{{ route('post', $categoriesrecomendados->slug) }}">
					<p class="pull-right" id="data">{{ $categoriesrecomendados->created_at->format('d/m') }}</p>
				</a>
			</div>
		</div>

		@endforeach()	

		@foreach($postsrecomendados as $postsrecomendados)

		<div class="d-inline-block div-noticias">
			
			<div class="panel-body">
				<a href="{{ route('post', $postsrecomendados->slug) }}">
					@if($postsrecomendados->file)
					<div class="div-img-noticia" style="background-image: url({{ $postsrecomendados->file }});">					
					</div>
					@endif
				</a>					

				
				<div class="div-titulo-noticia">
					<a href="{{ route('post', $postsrecomendados->slug) }}">
						{{ $postsrecomendados->name }}
					</a>
				</div>
				<a href="{{ route('post', $postsrecomendados->slug) }}">
					<p class="pull-right" id="data">{{ $postsrecomendados->created_at->format('d/m') }}</p>
				</a>
			</div>
		</div>

		@endforeach()	


		<div class="fb-comments" data-href="https://www.lume.com.br/post/{{ $post->slug }}" data-numposts="5" data-width="100%"></div>
</div>

@endsection