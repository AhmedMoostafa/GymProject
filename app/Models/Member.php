<?php

namespace App\Models;

use App\Classes;
use App\Membership;
use App\WorkoutSummary;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\MemberFactory;

class Member extends Model
{

    protected $fillable = [
        'is_checked', 'start_date', 'end_date','medical_physical_history','medical_allergic_history','available_frozen_days','available_membership_days','active_days'
    ];
    public function user(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(User::class);
    }
    public function membership(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Membership::class);
    }
    public function classes(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->belongsTo(Classes::class);
    }
    public function coaches(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Coach::class);
    }
    public function nutritionists(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Nutritionist::class);
    }
    public function workoutSummary(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(WorkoutSummary::class);
    }
}
