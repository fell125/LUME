{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
	{{ Form::label('name', 'Nome do Campeonato') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
	{{ Form::label('slug', 'URL') }}
	{{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>
<div class="form-group">
  {{ Form::label('file', 'Imagem') }}
  {{ Form::file('file') }}
</div>
<div class="form-group">
  {{ Form::label('status', 'Estado: ') }}
  <label>
    {{ Form::radio('status', 'PUBLISHED') }} Publicado
  </label>
  <label>
    {{ Form::radio('status', 'DRAFT') }} Rascunho
  </label>
</div>
<div class="form-group">
  {{ Form::label('data', 'Data do Campeonato:') }}
  {{ Form::date('data', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('excerpt', 'Resumo') }}
  {{ Form::textarea('excerpt', null, ['class' => 'form-control', 'rows'=> '2']) }}
</div>
<div class="form-group">
  {{ Form::label('body', 'Conteúdo') }}
  {{ Form::textarea('body', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::submit('Salvar', ['class' => 'btn btn-sm btn-primary']) }}
</div>

@section('scripts')

<script>
	$(document).ready(function(){
         $("#name").keyup(function(){
                var cadena = $(this).val();
                string_to_slug(cadena);
            });
});


  function string_to_slug (str) {
           str = str.replace(/^\s+|\s+$/g, '');
           str = str.toLowerCase(); 
          
            //quita acentos, cambia la ñ por n, etc
            var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
            var to   = "aaaaeeeeiiiioooouuuunc------";
            
            for (var i=0, l=from.length ; i<l ; i++) {
                  str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
             }

             str = str.replace(/[^a-z0-9 -]/g, '') // quita caracteres invalidos
                   .replace(/\s+/g, '-') // reemplaza los espacios por -
                   .replace(/-+/g, '-'); // quita las plecas

             return $("#slug").val(str);
  }﻿
</script>
@endsection

@section('js')
<script>
  CKEDITOR.config.height = 400;
  CKEDITOR.config.width = 'auto';
  CKEDITOR.replace( 'body' );
</script>
@endsection