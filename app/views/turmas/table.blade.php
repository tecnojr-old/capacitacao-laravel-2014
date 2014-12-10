{{HTML::link("turmas/add", "Adicionar")}}

<table>
	<thead>
		<tr>
			<th>Disciplina</th>
			<th>Professor</th>
			<th>Turma</th>
		</tr>
	</thead>
	<tbody>
	  @foreach($turmas as $turma)
		<tr>
			<td>{{$turma->disciplina->codigo}}-{{$turma->disciplina->descricao}}</td>
			<td>{{$turma->professor->nome}}</td>
			<td>{{$turma->codigo}}</td>
		</tr>
		@endforeach
	</tbody>
</table>