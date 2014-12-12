@extends("layouts.bootstrap")

@section("content")
	<style>
		/*@import url(//fonts.googleapis.com/css?family=Lato:700);*/

		body {
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			margin-top: 10%;
			margin-left: -150px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
	<div class="welcome">
		<a href="http://laravel.com" title="Laravel PHP Framework">{{HTML::image("images/laravel.png", "Laravel Framework")}}</a>
		<h1>You have arrived.</h1>
	</div>
@endsection
