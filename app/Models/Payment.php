<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['bootcamp_id', 'user_id' , 'amount' , 'authority' , 'referenceId' , 'status'];
    public function user(){
        return $this->belongsToMany(User::class);
    } 

    public function bootcamp(){
        return $this->belongsToMany(Bootcamp::class);
    } 
}
