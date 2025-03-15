<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'avatar', 'phone', 'email','role' ,'bio','cv'
    ];

    public function getFullName(){
        return $this->first_name ." " . $this->last_name;
    }
    /**
     * Get the full avatar URL.
     */
    public function getAvatarUrlAttribute()
    {
        return asset('uploads/'.$this->avatar);
    }

    public function getCvUrlAttribute()
    {
        return asset('uploads/'.$this->cv);
    }

    /**
     * A user can enroll in many bootcamps.
     */
    public function bootcamps()
    {
        return $this->belongsToMany(Bootcamp::class, 'bootcamp_teachers')->withTimestamps();
    }
}
