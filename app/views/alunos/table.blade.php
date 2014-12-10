
{{HTML::link("/alunos/add", "Adicionar")}}

<br/>

@if($alunos)
	<table>
		<thead>
			<tr>
				<th>Nome</th>
				<th>Matrícula</th>
				<th>Data de Nascimento</th>
			</tr>
		</thead>
		<tbody>
		  @foreach($alunos as $aluno)
			<tr>
				<td>{{$aluno->nome}}</td>
				<td>{{$aluno->matricula}}</td>
				<td>{{$aluno->data_nasc->format("d/m/Y")}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@else
	Nenhum aluno cadastrado.
@endif