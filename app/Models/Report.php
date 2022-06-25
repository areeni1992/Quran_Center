<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_name',
        'clas_name',
        'sorah_start',
        'ayah_start',
        'sorah_end',
        'ayah_end',
        'page_revision_count',
        'latest_test',
        'report_date',
        'clas_id',
        'user_id',
        'monthly_rate',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function clas()
    {
        return $this->belongsTo(Clas::class);
    }
}
