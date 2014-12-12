@extends("layouts.bootstrap")

@section("content")

<div class="col-md-4">

	{{Form::model(isset($aluno) ? $aluno : new Aluno, ["class"=>"form-horizontal", "role" => "form"])}}

		<div class="form-group">
			{{Form::label("nome", "Nome")}}
			{{Form::text("nome", null, ["class" => "form-control input-md", "placeholder" => "Digite o nome do aluno"])}}
		</div>

		<div class="form-group">
			{{Form::label("matricula", "Matrícula")}}
			{{Form::text("matricula", null, ["class" => "form-control input-md", "placeholder" => "Digite o número de matrícula"])}}
		</div>

		<div class="form-group">
			<div class="row">
				<div class="col-md-8">
					{{Form::label("data_nasc", "Data de Nascimento")}}
					{{Form::input("date","data_nasc", null, ["class" => "form-control input-md"])}}
				</div>
			</div>
		</div>

		<div class="form-group">
			{{Form::submit("Salvar", ["class" => "btn btn-primary"])}}

			{{HTML::link("/alunos", "Voltar", ["class" => "btn btn-danger"])}}
		</div>
	{{Form::close()}}
</div>

@endsection