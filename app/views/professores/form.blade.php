<h1>Professor - Adicionar</h1>

@if(isset($professor))
	{{Form::model($professor)}}
@else
	{{Form::open()}}
@endif

	<p>
		{{Form::label("nome", "Nome")}}
		{{Form::text("nome")}}
	</p>

	<p>
		{{Form::label("matricula", "Matricula")}}
		{{Form::text("matricula")}}
	</p>

	<p>
		{{Form::submit("Enviar")}}
	</p>
{{Form::close()}}