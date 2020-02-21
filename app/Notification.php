<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Player;

class Notification extends Model
{
    protected $table = 'notifications';

    public function player() {
    	return $this->belongsTo(Player::class);
    }
}
