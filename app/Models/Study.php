<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'cover_path',
        'slug',
        'author'
    ];

    public function lessons()
    {
        return $this->hasMany(Lesson::class, 'study_id', 'id');
    }
}
