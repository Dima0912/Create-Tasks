<?php

namespace App\Services\Contracts;

use App\Models\Task;
use App\Models\TaskHistory;
use Illuminate\Support\Facades\Request;

interface TaskServiceInterface
{
    public static function create_history(Task $task);

}