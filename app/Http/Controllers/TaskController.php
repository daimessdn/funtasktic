<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

use App\Task;

class TaskController extends Controller
{
    // add tasks
    public function create(Request $request) {
    	$task = new Task;

    	$task->player_id = Auth::user()->player->id;
    	$task->task_name = $request->task_name;
        $task->task_tag = $request->task_tag;
    	$task->task_desc = $request->task_desc;
    	$task->due = $request->due;

    	$task->save();

    	return redirect('home');
    }

    // mark task as done
    public function done($id) {
    	$task = Task::find($id);

    	$level = Auth::user()->player->level;
    	$health = Auth::user()->player->health;
    	$max_health = Auth::user()->player->max_health;
    	$xp = Auth::user()->player->xp + 10;
    	$max_xp = Auth::user()->player->max_xp;

    	DB::update('update tasks set completed = 1 where id = ?', [$id]);
    	DB::update('update player set xp = ? where user_id = ?', [$xp, Auth::user()->id]);

    	if ($xp > $max_xp || $xp == $max_xp) {
    		DB::update('update player set xp = ? where user_id = ?', [$xp - $max_xp, Auth::user()->id]);
    		DB::update('update player set max_xp = ?, max_health = ? where user_id = ?', [$max_xp + (20 * $level), $max_health + 10, Auth::user()->id]);
    		DB::update('update player set health = ? where user_id = ?', [$max_health + 10, Auth::user()->id]);
    		DB::update('update player set level = ? where user_id = ?', [$level + 1, Auth::user()->id]);
            DB::insert('insert into notifications (player_id, type, notification_content, dismissed) values (?, 1, ?, 0)', [
                Auth::user()->id, 'Congratulations for your level up. You are now grown into level ' . strval($level + 1)
            ]);
    	}

    	return back();
		}
		
	public function undone($id) {
    	$task = Task::find($id);

    	$level = Auth::user()->player->level;
    	$health = Auth::user()->player->health - 10;
    	$max_health = Auth::user()->player->max_health;
    	$xp = Auth::user()->player->xp;
    	$max_xp = Auth::user()->player->max_xp;

    	DB::update('update tasks set completed = 0 where id = ?', [$id]);
    	DB::update('update player set health = ? where user_id = ?', [$health, Auth::user()->id]);

    	return back();
    }

    public function update($id, Request $request) {
        $task = Task::find($id);
        $task->update($request->all());

        return back();
    }

    public function delete($id) {
    	$task = Task::find($id);
    	$task->delete($task);

    	$level = Auth::user()->player->level;
    	$health = Auth::user()->player->health;

    	DB::update('update player set health = ? where user_id = ?', [$health - 10, Auth::user()->id]);

    	return back();
    }
}
