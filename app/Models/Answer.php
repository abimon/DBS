<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $fillable = [
        'answer',
        'isCorrect',
        'quiz_id'
    ];
    public function study(){
        return $this->belongsTo(Quiz::class, 'quiz_id', 'id');
    }
}
