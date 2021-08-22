<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    /*public function user()
    {
        return $this -> belongsTo(App\User::class,'user_id');
    }*/

    public function question()
    {
        return $this -> belongsTo(App\Question::class,'question_id');
    }
}
