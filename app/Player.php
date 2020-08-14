<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Task;
use App\Notification;

class Player extends Model
{
    protected $table = 'player';

    public function player () {
    	return $this->belongsTo(User::class);
    }

    public function task () {
    	return $this->hasMany(Task::class);
    }

	public function notification () {
    	return $this->hasMany(Notification::class);
    }    
}
