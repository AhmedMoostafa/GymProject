<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
  public function coach()
  {
    return $this->belongsTo(Coach::class);
  }
  public function exercises()
  {
    return $this->belongsToMany(Exercise::class);
  }
  public function sets()
  {
    return $this->belongsToMany(Set::class, 'set_group');
  }
  public function members()
  {
    return $this->belongsToMany(Member::class);
  }
}
