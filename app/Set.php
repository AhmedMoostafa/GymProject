<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
  protected $guarded = [];
  
  public function coach()
  {
    return $this->belongsTo(Coach::class);
  }
  public function exercises()
  {
    return $this->belongsToMany(Exercise::class);
  }
  public function groups()
  {
    return $this->belongsToMany(Group::class, 'set_group');
  }
}
