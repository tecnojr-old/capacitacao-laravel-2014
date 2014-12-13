@extends("layouts.bootstrap")

@section("content")

{{HTML::link("disciplinas/add", "Adicionar", ["class" => "btn btn-primary pull-right"])}} <br><br>

<table class="table table-hover table-striped table-condensed table-bordered">
	<thead>
		<tr>
			<th>Descrição</th>
			<th>Código</th>
			<th>Opções</th>
		</tr>
	</thead>
	<tbody>
		@foreach($disciplinas as $disciplina)
			<tr>
				<td> {{$disciplina->descricao}} </td>
				<td> {{$disciplina->codigo}} </td>
				<td>
					<div class="btn-group">
						{{HTML::editButton("disciplinas/edit/".$disciplina->id)}}
						{{HTML::deleteButton("disciplinas/delete/".$disciplina->id)}} 
					</div>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

@endsection