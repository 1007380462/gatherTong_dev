<?php

namespace PragmaRX\Tracker\Vendor\Laravel\Models;

class QueryArgument extends Base {

	protected $table = 'tracker_query_arguments';
	public $connection='tracker';
	protected $fillable = array(
		'query_id',
		'argument',
		'value',
	);

}
