<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    //
    protected $table = 'plan';
    protected $fillable = [
        'title', 'description'
    ];

    public function nutritionist()
    {
        return $this->belongsTo(Nutritionist::class);
    }

    public function meals()
    {
        return $this->belongsToMany(Meal::class, 'meal_plan');
    }

    public function items()
    {
        return $this->belongsToMany(Item::class, 'item_plan');
    }

    public function member()
    {
        return $this->belongsToMany(Member::class);
    }
}
