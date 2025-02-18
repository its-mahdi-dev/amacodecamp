<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bootcamp extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'slug', 'title', 'thumbnail', 'cover', 'overview', 'curriculum',
        'level', 'duration', 'lessons', 'quizzes', 'certification', 
        'intro_video', 'price'
    ];

    protected $casts = [
        'curriculum' => 'array',
    ];

    /**
     * Get the full thumbnail URL.
     */
    public function getThumbnailUrlAttribute()
    {
        return asset("images/bootcamps/thumbnails/{$this->thumbnail}");
    }

    /**
     * Get the full cover URL.
     */
    public function getCoverUrlAttribute()
    {
        return asset("images/bootcamps/covers/{$this->cover}");
    }

    /**
     * A bootcamp can have many students (Users).
     */
    public function students()
    {
        return $this->belongsToMany(User::class, 'bootcamp_user')->withTimestamps();
    }

    /**
     * A bootcamp can have multiple teachers (Users).
     */
    public function teachers()
    {
        return $this->belongsToMany(User::class, 'course_teacher')->withTimestamps();
    }

    /**
     * A bootcamp can have many reviews.
     */
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
