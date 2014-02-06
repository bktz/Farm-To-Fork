<?php

class LocationsController extends BaseController {

	/**
	 * 
	 */
	public function index()
	{
		//fetch the users region somehow
		$city = 'Waterloo';		
		
		$pantries = Pantry::where('city','=',$city)->orderBy('name', 'DESC')->paginate(5);	
		
		return View::make('site/locations', compact('pantries'));		
	}
	
}

?>