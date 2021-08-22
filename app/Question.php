<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Question extends Model
{
    /*public function user()
    {
        return $this -> belongsTo(App\User::class,'user_id');
    }*/

    public function answers()
    {
        return $this -> hasMany(App\Answer::class,'question_id');
    }
}
