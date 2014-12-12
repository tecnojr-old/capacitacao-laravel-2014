<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	public function getAdd(){
		return $this->formView();
	}

	public function postAdd(){
		return $this->store();
	}

	public function getEdit($id){
		return $this->formView($id);
	}

	public function postEdit($id){
		return $this->store($id);
	}

	protected function store($id=null){ 
		throw new BadMethodCallException("Method ".get_called_class()."::store not implemented");	
	}

	protected function formView($id=null){
		throw new BadMethodCallException("Method ".get_called_class()."::formView not implemented");
	}

}
