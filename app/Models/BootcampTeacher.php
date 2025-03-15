<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BootcampTeacher extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['bootcamp_id', 'teacher_id'];
    public function teacher(){
        return $this->hasMany(Teacher::class);
    } 

    public function bootcamp(){
        return $this->hasMany(Bootcamp::class);
    } 
}
