<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskHistory extends Model
{
     protected $fillable = ['version', 'task_id', 'title', 'content'];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function tasks()
    {
        return $this->hasOne(Task::class);
    }

    public function lebels()
    {
        return $this->belongsToMany(Label::class);
    }

}
