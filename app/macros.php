<?php

/* ---------------------------------------------------------
	 -                    HTML Macros                        -
   ---------------------------------------------------------*/

/**
 * HTML Base path
 * @var string
 */
HTML::macro("base", function($url, $target=""){
	return "<base".HTML::attributes(["href" => URL::to($url), "target" => $target])."/>";
});

/**
 * Link generico com botão
 * @var string
 */
HTML::macro("linkButton", function($url, $title, $options = []){
	
	$attributes = array_merge([
		"class" => "btn btn-xs btn-default glyphicon",
	], $options);


	return HTML::link($url, $title, $attributes);
});

/**
 * Link para editar
 * @var string
 */
HTML::macro("editButton", function($url, $options = []){
	
	$attributes = array_merge([
		"class" => "btn btn-xs btn-default glyphicon glyphicon-edit",
	], $options);


	return HTML::link($url, "", $attributes);
});


/**
 * Link para deletar
 * @var string
 */
HTML::macro("deleteButton", function($url, $options = []){

	$attributes = array_merge([
		"class" 	=> "btn btn-xs btn-danger glyphicon glyphicon-trash",
		"onclick" => "return bootbox.redirect_confirm('".URL::to($url)."','Deseja realmente excluir esses dados?')"
	], $options);

	return "<a href='javascript: false;' ".HTML::attributes($attributes)."></a>";
});


/* ---------------------------------------------------------
	 -                    View Composers                     -
   ---------------------------------------------------------*/
View::composer("*form*", function($view){
	$view->withSelect2(true);
});

View::composer("*table*", function($view){
	$view->withDatatables(true);
});