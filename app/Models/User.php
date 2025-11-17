<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'user_type',
        'phone',
        'location',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // User type methods
    public function isFarmer()
    {
        return $this->user_type === 'farmer';
    }

    public function isHousehold()
    {
        return $this->user_type === 'household';
    }

    public function isSchool()
    {
        return $this->user_type === 'school';
    }

    public function isBusiness()
    {
        return $this->user_type === 'business';
    }
}
