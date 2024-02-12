<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $fillable = [
        'quiz',
        'lesson_id'
    ];
    public function answers(){
        return $this->hasMany(Answer::class, 'quiz_id', 'id');
    }
    public function study(){
        return $this->belongsTo(Lesson::class, 'lesson_id', 'id');
    }
}
