<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes, HasApiTokens;

    protected $fillable = [
        'first_name', 'last_name', 'avatar', 'phone', 'email','role'
    ];

    /**
     * Get the full avatar URL.
     */
    public function getAvatarUrlAttribute()
    {
        return asset("avatars/{$this->avatar}.png");
    }

    /**
     * A user can enroll in many bootcamps.
     */
    public function bootcamps()
    {
        return $this->belongsToMany(Bootcamp::class, 'bootcamp_user')->withTimestamps();
    }

    /**
     * A user can have a wishlist (saved courses).
     */
    public function wishlist()
    {
        return $this->belongsToMany(Bootcamp::class, 'wishlist')->withTimestamps();
    }

    /**
     * A user can have a basket (cart for courses they want to purchase).
     */
    public function basket()
    {
        return $this->belongsToMany(Bootcamp::class, 'basket')->withPivot('quantity')->withTimestamps();
    }

    /**
     * Relationship with payments.
     */
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    /**
     * Relationship with tickets (support system).
     */
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
