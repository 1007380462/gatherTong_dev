<?php

namespace PragmaRX\Tracker\Vendor\Laravel\Models;

class Query extends Base {

	protected $table = 'tracker_queries';
	public $connection='tracker';
	protected $fillable = array(
		'query',
	);

	public function arguments()
	{
		return $this->hasMany($this->getConfig()->get('query_argument_model'));
	}

}
