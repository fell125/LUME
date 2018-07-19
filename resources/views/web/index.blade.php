@extends('layouts.app')

@section('content')
<div class="container fadein" style="padding:0">
		<div class="row col-md-12 principais">
			
			<div class="" style="width: 58%; display: inline-block; height: 405px; overflow: hidden;">
				<a href="{{ route('post', $postPrincipal->slug) }}" style="text-decoration: none; color: white">
					
					<div class="panel-body grow" style="position:relative;font-size: 1.8rem; background: url('{{ $postPrincipal->file }}'); background-repeat: no-repeat; background-size: 200%; background-position: center; height: 405px;padding: 0;" >
					
						<div class="texto-destaque" style="width: 100%; display: flex;justify-content: flex-end;flex-flow: column nowrap;position: absolute; bottom: 25px; margin: 5px 0;padding: 30px 30px;">
							<h2 style="font-size: 28px;font-weight: 600;line-height: 1.3;font-family: opensans,opensans-bastian,Arial,sans-serif;text-shadow: 0 1px 3px rgba(0,0,0,.8);">{{ $postPrincipal->name }}</h2>
							<span class="post-footer" style="font-family: 'Montserrat', sans-serif;font-size: 16px;"> 
								{{ $postPrincipal->created_at->format('d') }} de 
								@if($postPrincipal->created_at->format('m') == '01')
								janeiro
								@elseif($postPrincipal->created_at->format('m') == '02')
								fevereiro
								@elseif($postPrincipal->created_at->format('m') == '03')
								março
								@elseif($postPrincipal->created_at->format('m') == '04')
								abril
								@elseif($postPrincipal->created_at->format('m') == '05')
								maio
								@elseif($postPrincipal->created_at->format('m') == '06')
								junho
								@elseif($postPrincipal->created_at->format('m') == '07')
								julho
								@elseif($postPrincipal->created_at->format('m') == '08')
								agosto
								@elseif($postPrincipal->created_at->format('m') == '09')
								setembro
								@elseif($postPrincipal->created_at->format('m') == '10')
								outubro
								@elseif($postPrincipal->created_at->format('m') == '11')
								novembro
								@elseif($postPrincipal->created_at->format('m') == '12')
								dezembro
								@endif
							</span>
							
						</div>
					
					</div>
					</a>
			</div>
				
			<div class="col-md-5" style="padding-left: 5px;">
					
					
						<div class="" style="display: inline-block; padding: 0; margin: 0; width: 104%;overflow: hidden;">
							<a href="{{ route('post', $postsSecundario1->slug) }}" style="text-decoration: none; color: white">
							<div class="panel-body grow" style="position:relative;font-size: 1.8rem; background: url('{{ $postsSecundario1->file }}'); background-repeat: no-repeat; background-size: 200%; background-position: center; height: 200px;padding: 0;">
								<div class="texto-destaque" style="width: 100%; justify-content: flex-end;position: absolute; bottom: 0;margin: 5px 0;padding: 15px 30px;">
									<h2 style="font-size: 23px;font-weight: 600;line-height: 1.3;font-family: opensans,opensans-bastian,Arial,sans-serif;text-shadow: 0 1px 3px rgba(0,0,0,.8);">{{ $postsSecundario1->name }}</h2>
									<span class="post-footer" style="font-family: 'Montserrat', sans-serif;font-size: 16px;"> 
										{{ $postsSecundario1->created_at->format('d') }} de 
										@if($postsSecundario1->created_at->format('m') == '01')
										janeiro
										@elseif($postsSecundario1->created_at->format('m') == '02')
										fevereiro
										@elseif($postsSecundario1->created_at->format('m') == '03')
										março
										@elseif($postsSecundario1->created_at->format('m') == '04')
										abril
										@elseif($postsSecundario1->created_at->format('m') == '05')
										maio
										@elseif($postsSecundario1->created_at->format('m') == '06')
										junho
										@elseif($postsSecundario1->created_at->format('m') == '07')
										julho
										@elseif($postsSecundario1->created_at->format('m') == '08')
										agosto
										@elseif($postsSecundario1->created_at->format('m') == '09')
										setembro
										@elseif($postsSecundario1->created_at->format('m') == '10')
										outubro
										@elseif($postsSecundario1->created_at->format('m') == '11')
										novembro
										@elseif($postsSecundario1->created_at->format('m') == '12')
										dezembro
										@endif
									</span>
								</div>
							</div>
							</a>	
						</div>
					
					
						<div class="" style="display: inline-block; padding: 0; margin: 0;height: 197px;width: 104%;overflow: hidden;">
							<a href="{{ route('post', $postsSecundario2->slug) }}" style="text-decoration: none; color: white">
								<div class="panel-body grow" style="position:relative;font-size: 1.8rem; background: url('{{ $postsSecundario2->file }}'); background-repeat: no-repeat; background-size: 200%; background-position: center; height: 200px; top:-3.45px; padding: 0;">
									<div class="texto-destaque" style="width: 100%; justify-content: flex-end;position: absolute; bottom: 0;margin: 5px 0;padding: 15px 30px;">
										<h2 style="font-size: 23px;font-weight: 600;line-height: 1.3;font-family: opensans,opensans-bastian,Arial,sans-serif;text-shadow: 0 1px 3px rgba(0,0,0,.8);">{{ $postsSecundario2->name }}</h2>
										<span class="post-footer" style="font-family: 'Montserrat', sans-serif;font-size: 16px;"> 
										{{ $postsSecundario2->created_at->format('d') }} de 
										@if($postsSecundario2->created_at->format('m') == '01')
										janeiro
										@elseif($postsSecundario2->created_at->format('m') == '02')
										fevereiro
										@elseif($postsSecundario2->created_at->format('m') == '03')
										março
										@elseif($postsSecundario2->created_at->format('m') == '04')
										abril
										@elseif($postsSecundario2->created_at->format('m') == '05')
										maio
										@elseif($postsSecundario2->created_at->format('m') == '06')
										junho
										@elseif($postsSecundario2->created_at->format('m') == '07')
										julho
										@elseif($postsSecundario2->created_at->format('m') == '08')
										agosto
										@elseif($postsSecundario2->created_at->format('m') == '09')
										setembro
										@elseif($postsSecundario2->created_at->format('m') == '10')
										outubro
										@elseif($postsSecundario2->created_at->format('m') == '11')
										novembro
										@elseif($postsSecundario2->created_at->format('m') == '12')
										dezembro
										@endif
									</span>
									</div>
								</div>
							</a>
						</div>
						

			</div>	
		</div>
		<div class="col-md-12 destaques">
			<h1>MAIS DESTAQUES</h1>
			<div class="row">
				<div class="col-sm-6">
					<a href="{{ route('post', $postDestaque1->slug) }}">
					<div class="div-destaque pull-left" style="background-image: url({{ $postDestaque1->file  }});">
						
					</div>
					</a>
					<div class="noticia-destaque pull-left" style="padding-right: 5%;">
						<a href="{{ route('post', $postDestaque1->slug) }}"><h1>{{ $postDestaque1->name }}</h1></a>
							<span class="post-footer" style="font-family: 'Montserrat', sans-serif;font-size: 12px; color: #4a4a4a;"> 
										por Assessoria LUME - {{ $postDestaque1->created_at->format('d') }} de 
										@if($postDestaque1->created_at->format('m') == '01')
										janeiro
										@elseif($postDestaque1->created_at->format('m') == '02')
										fevereiro
										@elseif($postDestaque1->created_at->format('m') == '03')
										março
										@elseif($postDestaque1->created_at->format('m') == '04')
										abril
										@elseif($postDestaque1->created_at->format('m') == '05')
										maio
										@elseif($postDestaque1->created_at->format('m') == '06')
										junho
										@elseif($postDestaque1->created_at->format('m') == '07')
										julho
										@elseif($postDestaque1->created_at->format('m') == '08')
										agosto
										@elseif($postDestaque1->created_at->format('m') == '09')
										setembro
										@elseif($postDestaque1->created_at->format('m') == '10')
										outubro
										@elseif($postDestaque1->created_at->format('m') == '11')
										novembro
										@elseif($postDestaque1->created_at->format('m') == '12')
										dezembro
										@endif
									</span>
					</div>					
				</div>
				<div class="col-sm-6">
					<a href="{{ route('post', $postDestaque1->slug) }}">
					<div class="div-destaque pull-right" style="background-image: url({{ $postDestaque2->file  }});">
						
					</div>
					</a>
					<div class="noticia-destaque pull-left" style="padding-left: 5%;">
						<a href="{{ route('post', $postDestaque1->slug) }}"><h1>{{ $postDestaque2->name }}</h1></a>
						<span class="post-footer" style="font-family: 'Montserrat', sans-serif;font-size: 12px; color: #4a4a4a;"> 
										por Assessoria LUME - {{ $postDestaque2->created_at->format('d') }} de 
										@if($postDestaque2->created_at->format('m') == '01')
										janeiro
										@elseif($postDestaque2->created_at->format('m') == '02')
										fevereiro
										@elseif($postDestaque2->created_at->format('m') == '03')
										março
										@elseif($postDestaque2->created_at->format('m') == '04')
										abril
										@elseif($postDestaque2->created_at->format('m') == '05')
										maio
										@elseif($postDestaque2->created_at->format('m') == '06')
										junho
										@elseif($postDestaque2->created_at->format('m') == '07')
										julho
										@elseif($postDestaque2->created_at->format('m') == '08')
										agosto
										@elseif($postDestaque2->created_at->format('m') == '09')
										setembro
										@elseif($postDestaque2->created_at->format('m') == '10')
										outubro
										@elseif($postDestaque2->created_at->format('m') == '11')
										novembro
										@elseif($postDestaque2->created_at->format('m') == '12')
										dezembro
										@endif
									</span>
					</div>	
				</div>
			</div>
		</div>
		<div class="col-md-12 ultimas-noticias">
			<h1>ÚLTIMAS NOTÍCIAS</h1>
			

			<div class="row">
				<div class="col-md-3">
					<div class="div-ultimas-noticias">
						<a href="{{ route('post', $ultimasNoticias1->slug) }}">
							@if($ultimasNoticias1->file)
							<div class="div-img-noticia" style="background-image: url({{ $ultimasNoticias1->file }});">

							</div>
							@endif
						</a>					

						
						<div class="div-titulo-noticia">
							<a href="{{ route('post', $ultimasNoticias1->slug) }}">
								{{ $ultimasNoticias1->name }}
							</a>
						</div>
							<span class="post-footer" style="font-family: 'Montserrat', sans-serif;font-size: 12px; color: #4a4a4a;"> 
											por Assessoria LUME - {{ $ultimasNoticias1->created_at->format('d') }} de 
											@if($ultimasNoticias1->created_at->format('m') == '01')
											janeiro
											@elseif($ultimasNoticias1->created_at->format('m') == '02')
											fevereiro
											@elseif($ultimasNoticias1->created_at->format('m') == '03')
											março
											@elseif($ultimasNoticias1->created_at->format('m') == '04')
											abril
											@elseif($ultimasNoticias1->created_at->format('m') == '05')
											maio
											@elseif($ultimasNoticias1->created_at->format('m') == '06')
											junho
											@elseif($ultimasNoticias1->created_at->format('m') == '07')
											julho
											@elseif($ultimasNoticias1->created_at->format('m') == '08')
											agosto
											@elseif($ultimasNoticias1->created_at->format('m') == '09')
											setembro
											@elseif($ultimasNoticias1->created_at->format('m') == '10')
											outubro
											@elseif($ultimasNoticias1->created_at->format('m') == '11')
											novembro
											@elseif($ultimasNoticias1->created_at->format('m') == '12')
											dezembro
											@endif
										</span>
					</div>
				</div>
			
				<div class="col-md-3">
					<div class="div-ultimas-noticias">
						<a href="{{ route('post', $ultimasNoticias2->slug) }}">
							@if($ultimasNoticias2->file)
							<div class="div-img-noticia" style="background-image: url({{ $ultimasNoticias2->file }});">

							</div>
							@endif
						</a>					

						
						<div class="div-titulo-noticia">
							<a href="{{ route('post', $ultimasNoticias2->slug) }}">
								{{ $ultimasNoticias2->name }}
							</a>
						</div>
							<span class="post-footer" style="font-family: 'Montserrat', sans-serif;font-size: 12px; color: #4a4a4a;"> 
											por Assessoria LUME - {{ $ultimasNoticias2->created_at->format('d') }} de 
											@if($ultimasNoticias2->created_at->format('m') == '01')
											janeiro
											@elseif($ultimasNoticias2->created_at->format('m') == '02')
											fevereiro
											@elseif($ultimasNoticias2->created_at->format('m') == '03')
											março
											@elseif($ultimasNoticias2->created_at->format('m') == '04')
											abril
											@elseif($ultimasNoticias2->created_at->format('m') == '05')
											maio
											@elseif($ultimasNoticias2->created_at->format('m') == '06')
											junho
											@elseif($ultimasNoticias2->created_at->format('m') == '07')
											julho
											@elseif($ultimasNoticias2->created_at->format('m') == '08')
											agosto
											@elseif($ultimasNoticias2->created_at->format('m') == '09')
											setembro
											@elseif($ultimasNoticias2->created_at->format('m') == '10')
											outubro
											@elseif($ultimasNoticias2->created_at->format('m') == '11')
											novembro
											@elseif($ultimasNoticias2->created_at->format('m') == '12')
											dezembro
											@endif
										</span>
					</div>
				</div>

				<div class="col-md-3">
					<div class="div-ultimas-noticias">
						<a href="{{ route('post', $ultimasNoticias3->slug) }}">
							@if($ultimasNoticias3->file)
							<div class="div-img-noticia" style="background-image: url({{ $ultimasNoticias3->file }});">

							</div>
							@endif
						</a>					

						
						<div class="div-titulo-noticia">
							<a href="{{ route('post', $ultimasNoticias3->slug) }}">
								{{ $ultimasNoticias3->name }}
							</a>
						</div>
							<span class="post-footer" style="font-family: 'Montserrat', sans-serif;font-size: 12px; color: #4a4a4a;"> 
											por Assessoria LUME - {{ $ultimasNoticias3->created_at->format('d') }} de 
											@if($ultimasNoticias3->created_at->format('m') == '01')
											janeiro
											@elseif($ultimasNoticias3->created_at->format('m') == '02')
											fevereiro
											@elseif($ultimasNoticias3->created_at->format('m') == '03')
											março
											@elseif($ultimasNoticias3->created_at->format('m') == '04')
											abril
											@elseif($ultimasNoticias3->created_at->format('m') == '05')
											maio
											@elseif($ultimasNoticias3->created_at->format('m') == '06')
											junho
											@elseif($ultimasNoticias3->created_at->format('m') == '07')
											julho
											@elseif($ultimasNoticias3->created_at->format('m') == '08')
											agosto
											@elseif($ultimasNoticias3->created_at->format('m') == '09')
											setembro
											@elseif($ultimasNoticias3->created_at->format('m') == '10')
											outubro
											@elseif($ultimasNoticias3->created_at->format('m') == '11')
											novembro
											@elseif($ultimasNoticias3->created_at->format('m') == '12')
											dezembro
											@endif
										</span>
					</div>
				</div>

				<div class="col-md-3">
					<div class="div-ultimas-noticias">
						<a href="{{ route('post', $ultimasNoticias4->slug) }}">
							@if($ultimasNoticias4->file)
							<div class="div-img-noticia" style="background-image: url({{ $ultimasNoticias4->file }});">

							</div>
							@endif
						</a>					

						
						<div class="div-titulo-noticia">
							<a href="{{ route('post', $ultimasNoticias4->slug) }}">
								{{ $ultimasNoticias4->name }}
							</a>
						</div>
							<span class="post-footer" style="font-family: 'Montserrat', sans-serif;font-size: 12px; color: #4a4a4a;"> 
											por Assessoria LUME - {{ $ultimasNoticias4->created_at->format('d') }} de 
											@if($ultimasNoticias4->created_at->format('m') == '01')
											janeiro
											@elseif($ultimasNoticias4->created_at->format('m') == '02')
											fevereiro
											@elseif($ultimasNoticias4->created_at->format('m') == '03')
											março
											@elseif($ultimasNoticias4->created_at->format('m') == '04')
											abril
											@elseif($ultimasNoticias4->created_at->format('m') == '05')
											maio
											@elseif($ultimasNoticias4->created_at->format('m') == '06')
											junho
											@elseif($ultimasNoticias4->created_at->format('m') == '07')
											julho
											@elseif($ultimasNoticias4->created_at->format('m') == '08')
											agosto
											@elseif($ultimasNoticias4->created_at->format('m') == '09')
											setembro
											@elseif($ultimasNoticias4->created_at->format('m') == '10')
											outubro
											@elseif($ultimasNoticias4->created_at->format('m') == '11')
											novembro
											@elseif($ultimasNoticias4->created_at->format('m') == '12')
											dezembro
											@endif
										</span>
					</div>
				</div>


			</div>
		</div>
</div>
@endsection