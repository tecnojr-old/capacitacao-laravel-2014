<?php $datatables = true; ?>
@extends("layouts.bootstrap")

@section("content")

{{HTML::link("/turmas", "Voltar", ["class" => "btn btn-default pull-right"])}} <br><br>
<table class="table table-bordered table-hover table-striped">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Matrícula</th>
			</tr>
		</thead>
		<tbody>
			@foreach($alunos as $aluno)
				<tr>
					<td>{{$aluno->nome}}</td>			
					<td>{{$aluno->matricula}}</td> 
				</tr>
			@endforeach
		</tbody>
</table>
@endsection