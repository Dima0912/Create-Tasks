<?php

namespace App\Services;

use App\Models\Task;
use App\Services\Contracts\TaskServiceInterface;
use Illuminate\Support\Facades\Storage;

class TaskService implements TaskServiceInterface
{

    public static function update($id)
    {
        
        $task = Task::find($id);

        $task->title = ' title';
        $task->content = 'Update content';
        $task->save();
        
    }
}
