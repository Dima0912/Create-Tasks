<?php

namespace App\Services\Contracts;

use App\Models\Task;

interface TaskServiceInterface
{
    public static function update(Task $task,$id);

}