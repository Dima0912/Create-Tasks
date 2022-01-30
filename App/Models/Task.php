<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Shmop;

class Task extends Model
{
  protected $fillable = [
    'title',
    'content',
    'creator_id',
    'status_id',
   

  ];
  // public $timestamps = false;

  public function status()
  {
    return $this->belongsTo(Status::class);
  }

  public function labels()
  {
    return $this->belongsToMany(Label::class);
  }

  public function task_history()
  {
    return $this->hasMany(TaskHistory::class);
  }
}
