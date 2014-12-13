<?php


HTML::macro("linkButton", function($url, $title, $options = []){
	
	$attributes = array_merge([
		"class" => "btn btn-xs btn-default glyphicon",
	], $options);


	return HTML::link($url, $title, $attributes);
});


HTML::macro("editButton", function($url, $options = []){
	
	$attributes = array_merge([
		"class" => "btn btn-xs btn-default glyphicon glyphicon-edit",
	], $options);


	return HTML::link($url, "", $attributes);
});


HTML::macro("deleteButton", function($url, $options = []){

	$attributes = array_merge([
		"class" 	=> "btn btn-xs btn-danger glyphicon glyphicon-trash",
		"onclick" => "return confirm('Deseja realmente excluir esses dados?')"
	], $options);

	return HTML::link($url, "", $attributes);
});