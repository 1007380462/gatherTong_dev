<?php

namespace PragmaRX\Tracker\Vendor\Laravel\Models;

class SqlQueryBinding extends Base {

	protected $table = 'tracker_sql_query_bindings';
	public $connection='tracker';
	protected $fillable = array(
		'sha1',
		'serialized',
	);

}
