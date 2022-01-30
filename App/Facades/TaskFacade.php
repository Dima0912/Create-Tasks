<?php

namespace App\Facades;

use App\Services\TaskHistoryService;
use Illuminate\Support\Facades\Facade;

class TaskFacade extends Facade
{
protected static function getFacadeAccessor()
{
    return TaskHistoryService::class;
}
}