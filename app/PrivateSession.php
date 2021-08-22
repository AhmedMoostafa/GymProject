<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrivateSession extends Model
{
  public function coach()
  {
    return $this->belongsTo(Coach::class);
  }

  public function members()
  {
    return $this->belongsToMany(Member::class);
  }
}
