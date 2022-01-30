<?php

namespace App\Services;

use App\Models\Task;
use App\Models\TaskHistory;
use App\Services\Contracts\TaskServiceInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TaskHistoryService implements TaskServiceInterface
{

  public static function create_history(Task $task)
  {
   
    $maxVersion = DB::table('task_histories')
      ->where('task_id', '=', $task->id)
      ->max('version');
     
     
      $taska = new TaskHistory();
      $taska->version = $maxVersion + 1;
    
      $taska->title = $task->title;
      $taska->content = $task->content;
      $taska->task_id = $task->id;
      $taska->save();

    //  return  TaskService::create_history($task);
  }

}
