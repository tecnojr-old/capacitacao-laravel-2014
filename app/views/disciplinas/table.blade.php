<table>
	<thead>
		<tr>
			<th> Descricao </th>
			<th> Codigo </th>
		</tr>
	</thead>
	<tbody>
		@foreach($disciplinas as $l)
			<tr>
				<td> {{$l->descricao}} </td>
				<td> {{$l->codigo}} </td>
			</tr>
		@endforeach
	</tbody>
</table>