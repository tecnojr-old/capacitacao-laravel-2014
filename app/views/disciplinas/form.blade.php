@extends("layouts.bootstrap")

@section("content")

<div class="col-md-4">
	
	{{Form::model(isset($disciplina) ? $disciplina : new Disciplina, ["class"=>"form-horizontal", "role" => "form"])}}

	<div class="form-group">
		{{Form::label("descricao", "Descricao")}}
		{{Form::text("descricao", null, ['class' => "form-control input-md", "placeholder" => "Digite a descrição da disciplina"])}}
	</div>

	<div class="form-group">
		{{Form::label("codigo", "Codigo")}}
		{{Form::text("codigo", null, ['class' => "form-control input-md", "placeholder" => "Digite o da disciplina"])}}
	</div>

	<div class="form-group">
		{{Form::submit("Salvar", ["class"=>"btn btn-primary"])}}
		{{HTML::link("/disciplinas", "Voltar", ["class" => "btn btn-danger"])}}
	</div>

{{Form::close()}}

@endsection