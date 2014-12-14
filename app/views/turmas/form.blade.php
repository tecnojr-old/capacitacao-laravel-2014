@extends("layouts.bootstrap")

@section("content")

<div class="col-md-4">
	{{Form::model(isset($turma) ? $turma : new Turma, ["class"=>"form-horizontal", "role" => "form"])}}
		
		<div class="form-group {{$errors->has("codigo")?"has-error": (!$errors->isEmpty()? "has-success": "")}}">
			{{Form::label("codigo", "Código")}}
			{{Form::text("codigo", null, ["class"=>"form-control input-md", "placeholder"=>"Digite o código da turma"])}}


			@if($errors->has("codigo"))
				<div class="help-block">
					{{$errors->first("codigo")}}
				</div>
			@endif
		</div>

		<div class="form-group {{$errors->has("professor_id")?"has-error": (!$errors->isEmpty()? "has-success": "")}}">
			{{Form::label("professor_id", "Professor")}}
			{{Form::select("professor_id", [ null => "Selecione um professor" ] + Professor::lists("nome", "id"), null, ["class"=>"form-control input-md"])}}

			@if($errors->has("professor_id"))
				<div class="help-block">
					{{$errors->first("professor_id")}}
				</div>
			@endif
		</div>

		<div class="form-group {{$errors->has("disciplina_id")?"has-error": (!$errors->isEmpty()? "has-success": "")}}">
			{{Form::label("disciplina_id", "Disciplina")}}
			{{Form::select("disciplina_id", [ null => "Selecione uma disciplina" ] + Disciplina::lists("descricao", "id"), null, ["class"=>"form-control input-md"])}}

			@if($errors->has("disciplina_id"))
				<div class="help-block">
					{{$errors->first("disciplina_id")}}
				</div>
			@endif
		</div>

		<div class="form-group">
			{{Form::submit("Salvar", ["class" => "btn btn-primary"])}}
			{{HTML::link("/turmas", "Voltar", ["class" => "btn btn-danger"])}}
		</div>

	{{Form::close()}}
</div>

@endsection