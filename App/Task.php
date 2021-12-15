<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Shmop;

class Task extends Model
{
  public function status()
  {
      return $this->belongsTo(Status::class);
  } 
  
  public function labels()
  {
      return $this->belongsToMany(Label::class);
  }
}