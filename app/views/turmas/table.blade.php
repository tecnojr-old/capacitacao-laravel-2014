@extends("layouts.bootstrap")

@section("content")

{{HTML::link("turmas/add", "Adicionar", ["class" => "btn btn-primary pull-right"])}} <br><br>

<table class="table table-hover table-striped table-condensed table-bordered">
	<thead>
		<tr>
			<th>Disciplina</th>
			<th>Professor</th>
			<th>Turma</th>
			<th>Opções</th>
		</tr>
	</thead>
	<tbody>
	  @foreach($turmas as $turma)
		<tr>
			<td>{{$turma->disciplina->codigo}}-{{$turma->disciplina->descricao}}</td>
			<td>{{$turma->professor? $turma->professor->nome : " - "}}</td>
			<td>{{$turma->codigo}}</td>
			<td>
					<div class="btn-group">
						{{HTML::link("turmas/edit/".$turma->id, "", ["class" => "btn btn-default btn-xs glyphicon glyphicon-pencil"])}}
						{{HTML::link("turmas/delete/".$turma->id, "", ["onclick"=>"return confirm('Tem certeza que deseja excluir a turma ".$turma->disciplina->codigo."-".$turma->disciplina->descricao." ".$turma->codigo." ?')", "class" => "btn btn-danger btn-xs glyphicon glyphicon-trash"])}} 
					</div>
				</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection