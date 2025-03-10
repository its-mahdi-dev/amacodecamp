<?php

// BootcampEpisode Model
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BootcampEpisode extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'session_id',
        'title',
        'type',
        'body',
        'start_time',
        'end_time',
        'order',
    ];

    
    public function bootcampSeason()
    {
        return $this->belongsTo(BootcampSeason::class);
    }
}

