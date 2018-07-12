@extends('layouts.app')

@section('content')		

@foreach($back as $back)
<div class="div-img-fundo" style="background-image:url({{ $back->file }});">
	<div class="mascara">
		<h1 class="h1-titulo">NOTÍCIAS</h1>
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
@endforeach()

		
<div class="container div-corpo">

	
	<div class="col-md-12">
		
		
		
		<div class="row div-search" >
			<form role="search" action="{!! url('pesquisar') !!}" method="post">
				<div class="form-group input-group">
					{!! csrf_field() !!}
					<input type="text" name="texto" class="form-control" placeholder="O que está procurando?">
					<div class="input-group-btn">
					<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
					</div>	
					
				</div>
						
			</form>
		</div>

		@foreach($posts as $post)

		<div class="d-inline-block div-noticias">
			
			<div class="panel-body">
				<a href="{{ route('post', $post->slug) }}">
					@if($post->file)
					<div class="div-img-noticia" style="background-image: url({{ $post->file }});">					
					</div>
					@endif
				</a>					

				
				<div class="div-titulo-noticia">
					<a href="{{ route('post', $post->slug) }}">
						{{ $post->name }}
					</a>
				</div>
				<a href="{{ route('post', $post->slug) }}">
					<p class="pull-right" id="data">{{ $post->created_at->format('d/m') }}</p>
				</a>
			</div>
		</div>

		@endforeach()	
		
	</div> 
	<div class="col-md-12 row div-paginacao">
		{{ $posts->render() }}
	</div>
</div>

@endsection
	