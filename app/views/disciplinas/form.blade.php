@extends("layouts.bootstrap")

@section("content")

<div class="col-md-4">
	
	{{Form::model(isset($disciplina) ? $disciplina : new Disciplina, ["class"=>"form-horizontal", "role" => "form"])}}

	<div class="form-group {{$errors->has("descricao")?"has-error": (!$errors->isEmpty()? "has-success": "")}}">
		{{Form::label("descricao", "Descricao")}}
		{{Form::text("descricao", null, ['class' => "form-control input-md", "placeholder" => "Digite a descrição da disciplina"])}}

		@if($errors->has("descricao"))
				<div class="help-block">
					{{$errors->first("descricao")}}
				</div>
			@endif
	</div>

	<div class="form-group {{$errors->has("codigo")?"has-error": (!$errors->isEmpty()? "has-success": "")}}">
		{{Form::label("codigo", "Codigo")}}
		{{Form::text("codigo", null, ['class' => "form-control input-md", "placeholder" => "Digite o da disciplina"])}}

		@if($errors->has("codigo"))
				<div class="help-block">
					{{$errors->first("codigo")}}
				</div>
			@endif
	</div>

	<div class="form-group">
		{{Form::submit("Salvar", ["class"=>"btn btn-primary"])}}
		{{HTML::link("/disciplinas", "Voltar", ["class" => "btn btn-danger"])}}
	</div>

{{Form::close()}}

@endsection