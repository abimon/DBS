<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable = [
        'module_id',
        'title',
        'body'
    ];
    public function questions(){
        return $this->hasMany(Lesson::class,'module_id','id');
    }
    public function module(){
        return $this->belongsTo(Module::class,'id','module_id');
    }
}
