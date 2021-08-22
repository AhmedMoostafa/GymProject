<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $fillable = [
        'location', 'phone_number', 'crowd_meter', 'picture', 'info', 'members_number', 'coaches_number'
    ];

    public function userInfos(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(UserInfo::class);
    }
    public function memberships(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Membership::class);
    }
    public function equipments(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Equipments::class);
    }
}
