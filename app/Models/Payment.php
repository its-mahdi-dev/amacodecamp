<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['basket_id', 'user_id' , 'amount' , 'authority' , 'referenceId' ,'cardPan', 'status' , 'paid_at'];
    public function user(){
        return $this->belongsTo(User::class);
    } 

    public function basket(){
        return $this->belongsTo(Basket::class);
    } 
}
