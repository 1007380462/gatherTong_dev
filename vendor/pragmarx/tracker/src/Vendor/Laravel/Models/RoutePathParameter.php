<?php

namespace PragmaRX\Tracker\Vendor\Laravel\Models;

class RoutePathParameter extends Base {

	protected $table = 'tracker_route_path_parameters';
	public $connection='tracker';
	protected $fillable = array(
		'route_path_id',
		'parameter',
		'value',
	);

}
