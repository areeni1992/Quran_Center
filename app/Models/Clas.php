<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clas extends Model
{
    use HasFactory;
    protected $table = 'clas';
    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function tasks()
    {
        return $this->belongsToMany(Task::class);
    }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    protected $fillable = ['name', 'ayah_count', 'ayah_revision', 'marahalah'];
}
