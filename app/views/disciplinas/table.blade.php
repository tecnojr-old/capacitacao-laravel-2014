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
						{{HTML::link("disciplinas/edit/".$disciplina->id, "", ["class" => "btn btn-default btn-xs glyphicon glyphicon-pencil"])}}
						{{HTML::link("disciplinas/delete/".$disciplina->id, "", ["onclick"=>"return confirm('Tem certeza que deseja excluir a disciplina ".$disciplina->nome." ?')", "class" => "btn btn-danger btn-xs glyphicon glyphicon-trash"])}} 
					</div>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

@endsection