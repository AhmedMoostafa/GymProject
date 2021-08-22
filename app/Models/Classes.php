<?php

namespace App\Models;

use App\Models\Coach;
use App\Models\Member;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $fillable=['title','description','level','capacity','link','price','duration','date'];
    public function members(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Member::class);
    }
    public function coaches(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Coach::class);
    }

}
