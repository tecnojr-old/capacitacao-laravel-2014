@extends("layouts.bootstrap")

@section("content")

{{HTML::link("professores/add", "Adicionar", ["class" => "btn btn-primary pull-right"])}} <br><br>

<table class="table table-hover table-striped table-condensed table-bordered">
	<thead>
		<tr>
			<th> Nome </th>
			<th> Matricula </th>
			<th class="options"> Opções </th>
		</tr>
	</thead>
	<tbody>
		@foreach($professores as $professor)
			<tr>
				<td> {{$professor->nome}} </td>
				<td> {{$professor->matricula}} </td>
				<td> 
					<div class="btn-group">
						{{HTML::editButton("professores/edit/".$professor->id)}}
						{{HTML::deleteButton("professores/delete/".$professor->id)}} 
					</div>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>	

@endsection