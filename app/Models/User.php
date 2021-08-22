<?php

namespace App\Models;

use App\Models\Coach;
use App\Models\Nutritionist;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\App;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','number','role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userInfos(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(UserInfo::class);
    }
    public function coach(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Coach::class);
    }
    public function member(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(member::class);
    }
    public function nutritionist(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Nutritionist::class);
    }
}
