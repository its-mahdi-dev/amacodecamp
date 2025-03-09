<?php

// Tag Model
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'type',
    ];

    public function bootcamps()
    {
        return $this->belongsToMany(Bootcamp::class, 'bootcamp_tags');
    }
}
