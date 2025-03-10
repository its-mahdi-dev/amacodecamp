<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Basket extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['user_id', 'bootcamps_id', 'quantity' , 'cupon_id' , 'total_price'];


    protected $casts = [
        'bootcamps_id' => 'array'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    } 

    public function cupon(){
        return $this->belongsTo(Cupon::class);
    } 

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
