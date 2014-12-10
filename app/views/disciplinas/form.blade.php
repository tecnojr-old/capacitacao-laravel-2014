<h1>Disciplina - Adicionar</h1>

{{Form::open()}}
	<p>
		{{Form::label("descricao", "Descricao")}}
		{{Form::text("descricao")}}
	</p>

	<p>
		{{Form::label("codigo", "Codigo")}}
		{{Form::text("codigo")}}
	</p>

	<p>
		{{Form::submit("Enviar")}}
	</p>
{{Form::close()}}