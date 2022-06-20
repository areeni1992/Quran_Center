<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $table = 'attendance';
    protected $fillable = ['attendance_status', 'user_id', 'attendance_date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
