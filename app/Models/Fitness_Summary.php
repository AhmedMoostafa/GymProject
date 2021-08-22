<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fitness_Summary extends Model
{
    //
    //
    protected $table = 'fitness_summary';
    protected $fillable = [
        'BMI', 'weight', 'muscle_ratio', 'height', 'fat_ratio', 'fitness_ratio', 'date', 'total_body_water', 'dry_lean_bath', 'body_fat_mass', 'opacity_ratio', 'protein', 'SMM'
    ];
}
