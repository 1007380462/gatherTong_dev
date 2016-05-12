<?php

namespace PragmaRX\Tracker\Vendor\Laravel\Models;

class EventLog extends Base {

	protected $table = 'tracker_events_log';

	protected $fillable = array(
		'event_id',
		'class_id',
	    'log_id',
	);

}
