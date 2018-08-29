<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timesheet extends Model
{
    protected $table = 'timesheet';

    public $timestamps = false;

    public function user()
    {
    	return $this->belongsTo('App\User','user_id', 'id');	
    }
}
