<?php

// BootcampSeason Model
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BootcampSeason extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'bootcamp_id',
        'title',
        'order',
    ];

    public function bootcamp()
    {
        return $this->belongsTo(Bootcamp::class);
    }

    public function episodes()
    {
        return $this->hasMany(BootcampEpisode::class);
    }
}
