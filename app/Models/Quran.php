<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quran extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'teacher_id',
        'juz_id',
        'surah_id',
        'ayat_ids',
        'ayate_count',
        'ayat',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
