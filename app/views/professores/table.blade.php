{{HTML::link("professores/add", "Adicionar")}}
<table>
	<thead>
		<tr>
			<th> Nome </th>
			<th> Matricula </th>
		</tr>
	</thead>
	<tbody>
		@foreach($professores as $p)
			<tr>
				<td> {{$p->nome}} </td>
				<td> {{$p->matricula}} </td>
				<td> {{HTML::link("professores/edit/".$p->id, "Editar")}} </td>
				<td> {{HTML::link("professores/delete/".$p->id, "Deletar", ["onclick"=>"return confirm('Tem certeza?')"])}} </td>
			</tr>
		@endforeach
	</tbody>
</table>	