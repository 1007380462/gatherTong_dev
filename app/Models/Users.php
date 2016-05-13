<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //
    public $table='tracker_users';
    public $timestamps=false;
    public $primaryKey='id';
    public $connection='tracker';
}