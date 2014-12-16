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
		{{HTML::style("bower/animate.css/animate.css")}}

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
			<div id="page-menu"	>
				@include("layouts.menu")
			</div>

			<div id="page-content">
				@yield("content")		
			</div>
		</div>

		<!-- jQuery -->
		{{HTML::script("bower/jquery/dist/jquery.min.js")}}
		
		<!-- Bootstrap JavaScript -->
		{{HTML::script("bower/bootstrap/dist/js/bootstrap.min.js")}}

		{{HTML::script("bower/bootstrap.growl/dist/bootstrap-growl.js")}}
		{{HTML::script("js/bootstrap.growl/bootstrap-growl-config.js")}}

		{{HTML::script("bower/bootbox.js/bootbox.js")}}
		{{HTML::script("js/bootbox.js/bootbox-config.js")}}

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

		{{HTML::script("js/application.js")}}

		@if(Session::has("success"))
			<script type="text/javascript">
				growl({
				  title:"<b>Operação bem sucedida</b><br/>", 
				  message: "{{Session::get("success")}}"
				}, "success");
			</script>
		@endif

		@if(Session::has("error"))
			<script type="text/javascript">  
				growl({
					title:"<b>Houve um erro:</b><br/>", 
				  message: "{{Session::get("error")}}"
				}, "warning", {

				});
			</script>
		@endif

	</body>
</html>