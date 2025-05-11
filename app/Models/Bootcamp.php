<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bootcamp extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'slug',
        'title',
        'thumbnail',
        'cover',
        'intro',
        'category_id',
        'body',
        'level',
        'duration',
        'lessons',
        'quizzes',
        'certification',
        'intro_video',
        'price',
        'capacity',
        'start_time',
        'end_time'
    ];


    /**
     * Get the full thumbnail URL.
     */
    public function getThumbnailUrlAttribute()
    {
        return $this->thumbnail ? asset("assets/images/bootcamps/thumbnails/{$this->thumbnail}") : asset("assets/images/img-loading.png");
    }

    /**
     * Get the full cover URL.
     */
    public function getCoverUrlAttribute()
    {
        return $this->cover ? asset("assets/images/bootcamps/covers/{$this->cover}") : asset("assets/images/img-loading.png");
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
        return $this->belongsToMany(Teacher::class, 'bootcamp_teachers')->withTimestamps();
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


    public function seasons()
    {
        return $this->hasMany(BootcampSeason::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'bootcamp_tags', 'bootcamp_id', 'tag_id');
    }

    public function off()
    {
        return $this->hasOne(Off::class);
    }

    public function getPrice()
    {
        $off = Off::where('bootcamp_id', $this->id)->first();
        if ($off != null) {
            if ($off->start_time != null) {
                if ($off->start_time < now() && $off->end_time > now()) {
                    if ($off->percent != null) return $this->price * (100 - $off->percent);
                    else return $this->price - $off->price;
                }
            } else if ($off->amount != null) {
                if ($off->amount > 0) {
                    if ($off->percent != null) return $this->price * (100 - $off->percent) / 100;
                    else return $this->price - $off->price;
                }
            }

            return $this->price;
        }

        return $this->price;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
