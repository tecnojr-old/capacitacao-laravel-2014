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
						{{HTML::link("alunos/edit/".$aluno->id, "", ["class" => "btn btn-default btn-xs glyphicon glyphicon-pencil"])}}
						{{HTML::link("alunos/delete/".$aluno->id, "", ["onclick"=>"return confirm('Tem certeza que deseja excluir o aluno ".$aluno->nome." ?')", "class" => "btn btn-danger btn-xs glyphicon glyphicon-trash"])}} 
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