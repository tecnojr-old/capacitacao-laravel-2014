@extends("layouts.bootstrap")

@section("content")

<div class="col-md-4">
	{{Form::model(isset($professor) ? $professor : new Professor, ["class"=>"form-horizontal", "role" => "form"])}}
		<div class="form-group">
			{{Form::label("nome", "Nome")}}
			{{Form::text("nome", null, ["class"=>"form-control input-md", "placeholder"=>"Digite o nome do professor"])}}
		</div>

		<div class="form-group">
			{{Form::label("matricula", "Matricula")}}
			{{Form::text("matricula", null, ["class"=>"form-control input-md", "placeholder"=>"Digite a matrícula do professor"])}}
		</div>

		<div class="form-group">
			{{Form::submit("Salvar", ["class" => "btn btn-primary"])}}
			{{HTML::link("/professores", "Voltar", ["class" => "btn btn-danger"])}}
		</div>
	{{Form::close()}}
</div>

@endsection