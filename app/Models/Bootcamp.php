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
        'body','level', 'duration', 'lessons', 'quizzes', 'certification', 
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
        return $this->thumbnail ? asset("images/bootcamps/thumbnails/{$this->thumbnail}") : asset("assets/images/img-loading.png");
    }

    /**
     * Get the full cover URL.
     */
    public function getCoverUrlAttribute()
    {
        return $this->cover ? asset("images/bootcamps/covers/{$this->cover}") : asset("assets/images/img-loading.png");
    }

    /**
     * A bootcamp can have many students (Users).
     */
    public function students()
    {
        return $this->belongsToMany(User::class, 'bootcamp_users')->withTimestamps();
    }

    /**
     * A bootcamp can have multiple teachers (Users).
     */
    public function teachers()
    {
        return $this->belongsToMany(User::class, 'bootcamp_teachers')->withTimestamps();
    }

    /**
     * A bootcamp can have many reviews.
     */
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
