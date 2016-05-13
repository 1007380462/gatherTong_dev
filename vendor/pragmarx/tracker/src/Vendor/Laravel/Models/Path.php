<?php

namespace PragmaRX\Tracker\Vendor\Laravel\Models;

class Path extends Base {

	protected $table = 'tracker_paths';
	public $connection='tracker';
	protected $fillable = array(
		'path',
	);

}
