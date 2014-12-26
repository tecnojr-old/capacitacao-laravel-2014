@extends("layouts.bootstrap")

@section("content")

{{HTML::link("turmas/add", "Adicionar", ["class" => "btn btn-primary pull-right"])}} <br><br>

<table class="table table-hover table-striped table-condensed table-bordered">
	<thead>
		<tr>
			<th>Disciplina</th>
			<th>Professor</th>
			<th>Turma</th>
			<th class="options">Opções</th>
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
					{{HTML::linkButton("turmas/{$turma->id}/alunos", "[".$turma->alunos->count()."]Alunos")}}
					{{HTML::editButton("turmas/edit/".$turma->id)}}
					{{HTML::deleteButton("turmas/delete/".$turma->id)}} 
				</div>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection