<?php

namespace PragmaRX\Tracker\Vendor\Laravel\Models;

class Domain extends Base {

	protected $table = 'tracker_domains';
	public $connection='tracker';
	protected $fillable = array(
		'name',
	);

}
