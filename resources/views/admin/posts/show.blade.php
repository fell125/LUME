@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					Ver Post
				</div>	

				<div class="panel-body">
					<p><strong>Nome: </strong> {{ $post->name }} </p>
					<p><strong>URL: </strong> {{ $post->slug }} </p>
					<p><strong>Resumo: </strong> {{ $post->excerpt }} </p>
					<p><strong>Conteudo: </strong> {{ $post->body }} </p>
					<div class="panel-body" style="font-size: 1.8rem;">
						@if($post->file)
						<img src="{{ $post->file }}" clas="img-responsive" style="width: 100%;">
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