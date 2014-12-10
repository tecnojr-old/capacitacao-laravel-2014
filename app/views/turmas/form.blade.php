{{Form::open()}}
	<p>
		{{Form::label("codigo", "codigo")}}
		{{Form::text("codigo")}}
	</p>

	<p>
		{{Form::label("professor_id", "Professor")}}
		{{Form::select("professor_id", Professor::lists("nome", "id"))}}
	</p>

	<p>
		{{Form::label("disciplina_id", "Disciplina")}}
		{{Form::select("disciplina_id", Disciplina::lists("descricao", "id"))}}
	</p>

	<p>
		{{Form::submit('Enviar')}}
	</p>

{{Form::close()}}