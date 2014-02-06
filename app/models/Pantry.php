<?php
use LaravelBook\Ardent\Ardent;
use Robbo\Presenter\PresentableInterface;

class Pantry extends Ardent {

	// Table name
	protected $table = 'pantry';

	protected $guarded = array();

	// Validation rules
	public static $rules = array(
		'email'                    => 'email',
		'name'                     => 'required|between:1,255',
		'phone_number'             => 'integer',
		'phone_number_ext'         => 'integer',
		'address'                  => 'required|1,255',
		'city'					   => 'required|1,255',
		'postal_code'			   => 'required|1,9',
		'province_state'           => 'required|2',
		'country'                  => 'required|1,255',
		'hoursMon'                 => '1,255',
		'hoursTues'                => '1,255',
		'hoursWed'                 => '1,255',
		'hoursThurs'               => '1,255',
		'hoursFri'                 => '1,255',
		'hoursSat'                 => '1,255',
		'hoursSun'                 => '1,255',				
	);

}
