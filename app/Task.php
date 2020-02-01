<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Player;

class Task extends Model
{
    protected $table = "tasks";
    protected $fillable = ["player_id", "task_name", "task_desc", "task_tag", "due"];
    // protected $hidden = ["player_id"];

    public function player() {
        return $this->belongsTo(Player::class);
    }
}
