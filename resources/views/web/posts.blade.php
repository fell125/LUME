<title>Notícias</title>
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

		<div class="row">
			@foreach($posts as $post)

			<div class="col-md-3 div-noticia-recomendada">
						
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
							<span class="post-footer" style="font-family: 'Montserrat', sans-serif;font-size: 12px; color: #4a4a4a;"> 
								por Assessoria LUME - {{ $post->created_at->format('d') }} de 
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
							</span>
						
					</div>

			@endforeach()
		</div>	
		
	</div> 
	<div class="col-md-12 row div-paginacao">
		{{ $posts->render() }}
	</div>
</div>

@endsection
	