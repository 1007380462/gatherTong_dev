<?php

namespace PragmaRX\Tracker\Vendor\Laravel\Models;

class SqlQuery extends Base {

	protected $table = 'tracker_sql_queries';
	public $connection='tracker';
	protected $fillable = array(
		'sha1',
		'statement',
	    'time',
	    'connection_id',
	);

}
