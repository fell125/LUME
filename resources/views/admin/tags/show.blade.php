@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					Ver Tag
				</div>	

				<div class="panel-body">
					<p><strong>Nome: </strong> {{ $tag->name }} </p>
					<p><strong>URL: </strong> {{ $tag->slug }} </p>
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