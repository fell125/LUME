@extends('layouts.app')

@section('content')
<div class="container" style="padding:0">
		<h1 style="font-size: 3.9rem;">Noticias</h1>	
		<div class="row">
			
			<div class="" style="width: 58%; display: inline-block; height: 405px; overflow: hidden;">
				<a href="{{ route('post', $postPrincipal->slug) }}" style="text-decoration: none; color: white">
					
					<div class="panel-body grow" style="position:relative;font-size: 1.8rem; background: url('{{ $postPrincipal->file }}'); background-repeat: no-repeat; background-size: 200%; background-position: center; height: 405px;" >
					
						<div class="texto-destaque" style="display: flex;justify-content: flex-end;flex-flow: column nowrap;position: absolute; bottom: 0; margin: 2px 0;padding: 30px 30px;">
							<h2 style="font-size: 28px;font-weight: 600;line-height: 1.3;">{{ $postPrincipal->name }}</h2>
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
							
				<a href="{{ route('post', $postPrincipal->slug) }}" style="text-decoration: none; color: black">	
			</div>
				
			<div class="col-md-5" style="padding-left: 5px;  overflow: hidden;">
					
					
						<div class="" style="display: inline-block; padding: 0; margin: 0; width: 104%;overflow: hidden;">
							<a href="{{ route('post', $postsSecundario1->slug) }}" style="text-decoration: none; color: white">
							<div class="panel-body grow" style="position:relative;font-size: 1.8rem; background: url('{{ $postsSecundario1->file }}'); background-repeat: no-repeat; background-size: 200%; background-position: center; height: 200px;">
								<div class="texto-destaque" style="justify-content: flex-end;position: absolute; bottom: 0;margin: 2px 0;padding: 15px 0px;">
									<h2 style="font-size: 23px;font-weight: 600;line-height: 1.3;">{{ $postsSecundario1->name }}</h2>
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
					
					
						<div class="" style="display: inline-block; padding: 0; margin: 0; width: 104%;overflow: hidden;">
							<a href="{{ route('post', $postsSecundario2->slug) }}" style="text-decoration: none; color: white">
								<div class="panel-body grow" style="position:relative;font-size: 1.8rem; background: url('{{ $postsSecundario2->file }}'); background-repeat: no-repeat; background-size: 200%; background-position: center; height: 200px; top:-3.45px;">
									<div class="texto-destaque" style="justify-content: flex-end;position: absolute; bottom: 0;margin: 2px 0;padding: 15px 0px;">
										<h2 style="font-size: 23px;font-weight: 600;line-height: 1.3;">{{ $postsSecundario2->name }}</h2>
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
</div>
@endsection