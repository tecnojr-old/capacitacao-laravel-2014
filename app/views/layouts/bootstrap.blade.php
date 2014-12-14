<!DOCTYPE html>
<html lang="pt">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Escola</title>

		{{HTML::base("/")}}

		<!-- Bootstrap CSS -->
		{{HTML::style("bower/bootstrap/dist/css/bootstrap.min.css")}}
		{{HTML::style("bower/bootstrap/dist/css/bootstrap-theme.min.css")}}

		@if(isset($select2) && $select2 == true)
			{{HTML::style("bower/select2/select2.css")}}
			{{HTML::style("bower/select2/select2-bootstrap.css")}}
		@endif

		@if(isset($datatables) && $datatables == true)
			{{--HTML::style("bower/datatables/media/css/jquery.dataTables.min.css")--}}
			{{HTML::style("css/datatables/dataTables.bootstrap.css")}}
		@endif

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="col-md-8 col-md-offset-2">
			@include("layouts.menu")
			
			@if(Session::has("success"))
				<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
				  {{Session::get("success")}}
				</div>
			@endif

			@if(Session::has("error"))
				<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
				  {{Session::get("error")}}
				</div>
			@endif

			@yield("content")		
		</div>

		<!-- jQuery -->
		{{HTML::script("bower/jquery/dist/jquery.min.js")}}
		
		<!-- Bootstrap JavaScript -->
		{{HTML::script("bower/bootstrap/dist/js/bootstrap.min.js")}}

		<!-- Carregamento dos pacotes bower -->
		@if(isset($select2) && $select2 == true)
			{{HTML::script("bower/select2/select2.js")}}
			{{HTML::script("bower/select2/select2_locale_pt-BR.js")}}
			{{HTML::script("js/select2/select2-config.js")}}
		@endif

		@if(isset($datatables) && $datatables == true)
			{{HTML::script("bower/datatables/media/js/jquery.dataTables.min.js")}}
			{{HTML::script("js/datatables/dataTables.bootstrap.js")}}
			{{HTML::script("js/datatables/datatables-config.js")}}
		@endif
	</body>
</html>