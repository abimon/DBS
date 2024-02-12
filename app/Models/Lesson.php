<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Console\Question\Question;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable= [
        'study_id',
        'lesson_title',
        'content',
    ];
    public function quizes(){
        return $this->hasMany(Quiz::class, 'lesson_id', 'id');
    }

    public function study(){
        return $this->belongsTo(Study::class, 'study_id', 'id');
    }
}
