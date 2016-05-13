<?php

namespace PragmaRX\Tracker\Vendor\Laravel\Models;

class SqlQueryLog extends Base {

	protected $table = 'tracker_sql_queries_log';
	public $connection='tracker';
	protected $fillable = array(
		'log_id',
		'sql_query_id',
	);
}
