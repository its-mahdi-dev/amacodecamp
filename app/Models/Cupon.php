<?php

// Cupon Model
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cupon extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'code',
        'description',
        'amount',
        'start_time',
        'end_time',
        'percent',
        'price',
        'min_pay',
    ];

    public function baskets()
    {
        return $this->hasMany(Basket::class);
    }
}
