<?php

// Campaign Model
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone',
        'name',
        'ip_address',
        'user_agent'
    ];
}
