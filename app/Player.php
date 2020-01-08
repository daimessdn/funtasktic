<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\User;

class Player extends Model
{
    protected $table = 'player';

    public function player () {
    	return $this->belongsTo(User::class);
    }
}
