<?php

namespace App;

use App\Models\Member;
use Illuminate\Database\Eloquent\Model;

class WorkoutSummary extends Model
{
    //

    protected $table = 'workout_summaries';

    protected $fillable = [
        'id','calories_burnt','member_id','duration','created_at','updated_at'
    ];

    public function member(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Member::class);
    }
}
