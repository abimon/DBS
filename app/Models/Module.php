<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_id',
        'title',
        'description',
    ];
    public function lessons(){
        return $this->hasMany(Lesson::class,'module_id','id');
    }
    public function course(){
        return $this->belongsTo(Course::class,'id','course_id');
    }
}
