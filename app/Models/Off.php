<?php

// Off Model
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Off extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'bootcamp_id',
        'percent',
        'price',
        'start_time',
        'end_time',
        'amount',
        'description',
    ];

    public function bootcamp()
    {
        return $this->belongsTo(Bootcamp::class);
    }
}
