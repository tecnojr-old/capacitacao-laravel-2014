@extends("layouts.bootstrap")

@section("content")

<div class="col-md-4">

	{{Form::model(isset($aluno) ? $aluno : new Aluno, ["class"=>"form-horizontal", "role" => "form"])}}

		<div class="form-group {{$errors->has("nome")?"has-error": (!$errors->isEmpty()? "has-success": "")}}">
			{{Form::label("nome", "Nome")}}
			{{Form::text("nome", null, ["class" => "form-control input-md", "placeholder" => "Digite o nome do aluno"])}}

			@if($errors->has("nome"))
				<div class="help-block">
					{{$errors->first("nome")}}
				</div>
			@endif
		</div>

		<div class="form-group {{$errors->has("matricula")?"has-error": (!$errors->isEmpty()? "has-success": "")}}">
			{{Form::label("matricula", "Matrícula")}}
			{{Form::text("matricula", null, ["class" => "form-control input-md", "placeholder" => "Digite o número de matrícula"])}}

			@if($errors->has("matricula"))
				<div class="help-block">
					{{$errors->first("matricula")}}
				</div>
			@endif
		</div>

		<div class="form-group {{$errors->has("data_nasc")?"has-error": (!$errors->isEmpty()? "has-success": "")}}">
			<div class="row">
				<div class="col-md-8">
					{{Form::label("data_nasc", "Data de Nascimento")}}
					{{Form::input("date","data_nasc", null, ["class" => "form-control input-md"])}}
				</div>
				
			</div>

			@if($errors->has("data_nasc"))
					<div class="help-block">
						{{$errors->first("data_nasc")}}
					</div>
				@endif
		</div>

		<div class="form-group">
			{{Form::submit("Salvar", ["class" => "btn btn-primary"])}}

			{{HTML::link("/alunos", "Voltar", ["class" => "btn btn-danger"])}}
		</div>
	{{Form::close()}}
</div>

@endsection