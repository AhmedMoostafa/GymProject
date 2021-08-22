<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $table = 'item';
    protected $fillable = [
        'title', 'cal', 'level'
    ];

    public function nutritionist()
    {
        return $this->belongsTo(Nutritionist::class);
    }

    public function meals()
    {
        return $this->belongsToMany(Meal::class, 'item_meal');
    }

    public function plans()
    {
        return $this->belongsToMany(Plan::class, 'item_plan');
    }
}
