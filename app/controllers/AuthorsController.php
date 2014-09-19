<?php 

class AuthorsController extends BaseController {
	public $restful=true;
	public function index()
	{
		$view=View::make('authors.index',array('name'=>'Anand varghese k'))
		->with('age',28)
	    ->with('gender','M');
		$view->location='guruvayoor';
		$view['ph']='487-557121';
		$view->title="anand";
		return $view;


	}
	public function add()
	{
		return View::make('home.index');
	}
}

 ?>