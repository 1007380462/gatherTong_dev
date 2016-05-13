<?php

namespace PragmaRX\Tracker\Vendor\Laravel\Models;

class User extends Base {


    public $connection='tracker';
   protected $table='tracker_users';
    public $primaryKey='id';
    public $timestamps=false;
}

