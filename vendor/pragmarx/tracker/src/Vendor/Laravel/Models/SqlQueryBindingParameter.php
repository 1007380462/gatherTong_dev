<?php

namespace PragmaRX\Tracker\Vendor\Laravel\Models;

class SqlQueryBindingParameter extends Base {

	protected $table = 'tracker_sql_query_bindings_parameters';
	public $connection='tracker';
	protected $fillable = array(
		'sql_query_bindings_id',
		'name',
		'value',
	);

}
