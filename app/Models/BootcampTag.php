<?php

// BootcampTag Model
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BootcampTag extends Model
{
    use HasFactory;

    protected $fillable = [
        'tag_id',
        'bootcamp_id',
    ];
    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }

    // Define the inverse of the relationship with Bootcamp
    public function bootcamp()
    {
        return $this->belongsTo(Bootcamp::class);
    }

}
