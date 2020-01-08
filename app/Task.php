<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Player;

class Task extends Model
{
    protected $table = "tasks";
    protected $fillable = ["task_name", "due"];

    public function player() {
        return $this->belongsTo(Player::class);
    }
}
