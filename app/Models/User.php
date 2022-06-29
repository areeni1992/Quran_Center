<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use phpDocumentor\Reflection\Types\This;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function userType() {
        return $this->belongsTo(UserType::class);
    }

    public function clas()
    {
        return $this->belongsTo(Clas::class);
    }

    public function tasks()
    {
        return $this->belongsToMany(Task::class);
    }

    public function attendance()
    {
        return $this->hasOne(Attendance::class, 'user_id');
    }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    public function quran()
    {
        return $this->belongsTo(Quran::class);
    }
    protected $fillable = [
        'name',
        'user_title',
        'email',
        'password',
        'user_type_id',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
