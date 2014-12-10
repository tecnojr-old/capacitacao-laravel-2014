<?php 

class UsersController extends BaseController{


	public function getSignUp(){
		return View::make("users.signUp");
	}

	public function postSignUp(){
		$nome = Input::get("nome", "");
		$email = Input::get("email", "");
		$telefone = Input::get("telefone", "");

		return View::make("users.signUpData")
			->with(compact("nome", "email", "telefone"));
	}

}