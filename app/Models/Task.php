<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table = 'task';
    public function classes()
    {
        return $this->belongsToMany(Clas::class);
    }

    public function users()
    {
        return  $this->belongsToMany(User::class);
    }

    protected $fillable = ['joz_count', 'task_time', 'latest_task', 'name', 'mark'];
}
