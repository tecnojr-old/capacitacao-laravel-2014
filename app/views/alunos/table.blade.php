@extends("layouts.bootstrap")

@section("content")

{{HTML::link("alunos/add", "Adicionar", ["class" => "btn btn-primary pull-right"])}} <br><br>

@if($alunos)
	<table class="table table-hover table-striped table-condensed table-bordered">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Matrícula</th>
				<th>Data de Nascimento</th>
				<th>Opções</th>
			</tr>
		</thead>
		<tbody>
		  @foreach($alunos as $aluno)
			<tr>
				<td>{{$aluno->nome}}</td>
				<td>{{$aluno->matricula}}</td>
				<td>{{$aluno->data_nasc->format("d/m/Y")}}</td>
				<td> 
					
					<div class="btn-group">
						{{HTML::linkButton("alunos/edit/".$aluno->id."/turmas", "[".$aluno->turmas()->count()."]Turmas")}}
						{{HTML::editButton("alunos/edit/".$aluno->id)}}
						{{HTML::deleteButton("alunos/delete/".$aluno->id)}} 
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@else
	Nenhum aluno cadastrado.
@endif

@endsection