@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					Ver Campeonato
				</div>	

				<div class="panel-body">
					<p><strong>Nome: </strong> {{ $campeonato->name }} </p>
					<p><strong>URL: </strong> {{ $campeonato->slug }} </p>
					<p><strong>Conteudo: </strong> {{ $campeonato->body }} </p>
					<p><strong>Resumo: </strong> {{ $campeonato->excerpt }} </p>
					<div class="panel-body" style="font-size: 1.8rem;">
						@if($campeonato->file)
						<img src="{{ $campeonato->file }}" clas="img-responsive" style="width: 100%;">
						@endif
					</div>
				</div>
			</div>
			<button class="btn btn-md btn-primary pull-right" onclick="goBack()">Voltar</button>

			<script>
			function goBack() {
			    window.history.back();
			}
			</script>
		</div>
	</div>
</div>
@endsection