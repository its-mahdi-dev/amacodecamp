<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BootcampTeacher extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['course_id', 'user_id'];
    public function user(){
        return $this->hasMany(User::class);
    } 

    public function bootcamp(){
        return $this->hasMany(Bootcamp::class);
    } 
}
