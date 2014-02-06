<?php

class PantryController extends BaseController {

	/**
	 * Returns the pantries of a specified region (city atm)
	 */
	public function index()
	{
		//fetch the users region somehow
// 		$city = 'Waterloo';		
		$city = 'Guelph';
		$pantries = Pantry::where('city','=',$city)->orderBy('name', 'DESC')->paginate(5);	

		return View::make('site/locations', compact('pantries'));		
	}
	
	/**
	 * Display the specified resource.
	 *
	 * @param  Project  $project
	 */
	public function show($pantry){

		return View::make('site/pantry/show', compact('pantry'));
	}
	
}

?>