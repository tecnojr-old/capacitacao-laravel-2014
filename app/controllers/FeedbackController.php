<?php

class FeedbackController extends BaseController{
	
	public function getContact(){
		return View::make('feedbacks.contact_form');
	}

	public function postContact(){
		return View::make('feedbacks.contact_show')->with(Input::all());
	}
}