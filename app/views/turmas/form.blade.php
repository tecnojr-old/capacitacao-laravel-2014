@extends("layouts.bootstrap")

@section("content")

<div class="col-md-4">
	{{Form::model(isset($turma) ? $turma : new Turma, ["class"=>"form-horizontal", "role" => "form"])}}
		<div class="form-group">
			{{Form::label("codigo", "Código")}}
			{{Form::text("codigo", null, ["class"=>"form-control input-md", "placeholder"=>"Digite o código da turma"])}}
		</div>

		<div class="form-group">
			{{Form::label("professor_id", "Professor")}}
			{{Form::select("professor_id", [ null => "Selecione um professor" ] + Professor::lists("nome", "id"), null, ["class"=>"form-control input-md"])}}
		</div>

		<div class="form-group">
			{{Form::label("disciplina_id", "Disciplina")}}
			{{Form::select("disciplina_id", [ null => "Selecione uma disciplina" ] + Disciplina::lists("descricao", "id"), null, ["class"=>"form-control input-md"])}}
		</div>

		<div class="form-group">
			{{Form::submit("Salvar", ["class" => "btn btn-primary"])}}
			{{HTML::link("/turmas", "Voltar", ["class" => "btn btn-danger"])}}
		</div>

	{{Form::close()}}
</div>

@endsection