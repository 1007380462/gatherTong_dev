<?php

namespace PragmaRX\Tracker\Vendor\Laravel\Models;

class Cookie extends Base {

	protected $table = 'tracker_cookies';
	public $connection='tracker';
	protected $fillable = array('uuid');

}
