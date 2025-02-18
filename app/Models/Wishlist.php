<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wishlist extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['user_id', 'bootcamp_id'];

    public function user(){
        return $this->hasOne(User::class);
    } 

    public function bootcamp(){
        return $this->hasOne(Bootcamp::class);
    } 
}
