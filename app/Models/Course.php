<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'author',
        'title',
        'category',
        'description',
        'cover_path',
    ];
    function publisher(){
        return $this->belongsTo(User::class,'id','author');
    }
    public function modules(){
        return $this->hasMany(Module::class,'course_id','id');
    }
}
