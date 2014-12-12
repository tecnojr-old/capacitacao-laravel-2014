@extends("layouts.bootstrap")

@section("content")

{{HTML::link("professores/add", "Adicionar", ["class" => "btn btn-primary pull-right"])}} <br><br>

<table class="table table-hover table-striped table-condensed table-bordered">
	<thead>
		<tr>
			<th> Nome </th>
			<th> Matricula </th>
			<th> Opções </th>
		</tr>
	</thead>
	<tbody>
		@foreach($professores as $professor)
			<tr>
				<td> {{$professor->nome}} </td>
				<td> {{$professor->matricula}} </td>
				<td> 
					<div class="btn-group">
						{{HTML::link("professores/edit/".$professor->id, "", ["class" => "btn btn-default btn-xs glyphicon glyphicon-pencil"])}}
						{{HTML::link("professores/delete/".$professor->id, "", ["onclick"=>"return confirm('Tem certeza que deseja excluir o professor ".$professor->nome." ?')", "class" => "btn btn-danger btn-xs glyphicon glyphicon-trash"])}} 
					</div>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>	

@endsection