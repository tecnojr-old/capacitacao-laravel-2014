{{Form::open()}}

<p>
	{{Form::label("nome", "Nome")}}
	{{Form::text("nome")}}
</p>

<p>
	{{Form::label("matricula", "Matrícula")}}
	{{Form::text("matricula")}}
</p>

<p>
	{{Form::label("data_nasc", "Data de Nascimento")}}
	{{Form::input("date","data_nasc")}}
</p>

<p>
	{{Form::submit("Enviar")}}
</p>

{{Form::close()}}