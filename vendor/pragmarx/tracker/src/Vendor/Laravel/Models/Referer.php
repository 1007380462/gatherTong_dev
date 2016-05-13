<?php

namespace PragmaRX\Tracker\Vendor\Laravel\Models;

class Referer extends Base {

	protected $table = 'tracker_referers';
	public $connection='tracker';
	protected $fillable = array(
		'url',
		'host',
		'domain_id',
		'medium',
		'source',
		'search_terms_hash'
	);

	public function domain()
	{
		return $this->belongsTo($this->getConfig()->get('domain_model'));
	}

}
