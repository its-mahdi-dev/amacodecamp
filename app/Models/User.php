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


    public function getFullName(){
        return $this->first_name ." " . $this->last_name;
    }
    /**
     * Get the full avatar URL.
     */
    public function getAvatarUrlAttribute()
    {
        return asset('/storage/avatars/'.$this->avatar);
    }

    /**
     * A user can enroll in many bootcamps.
     */
    public function bootcamps()
    {
        return $this->belongsToMany(Bootcamp::class, 'bootcamp_users')->withTimestamps();
    }

    /**
     * A user can have a wishlist (saved courses).
     */
    public function wishlist()
    {
        return $this->belongsToMany(Bootcamp::class, 'wishlists')->withTimestamps();
    }

    /**
     * Get the license for a specific bootcamp.
     *
     * @param  int  $bootcampId
     * @return string|null
     */
    public function getLicenseForBootcamp($bootcampId)
    {
        // Find the license based on bootcamp_id and user_id
        $license = $this->studentLicenses()->where('bootcamp_id', $bootcampId)->first();

        // Return the license if found, otherwise return null
        return $license ? $license->license : null;
    }

    /**
     * Relationship with StudentLicense (user's licenses for bootcamps).
     */
    public function studentLicenses()
    {
        return $this->hasMany(StudentLicense::class);
    }

    /**
     * A user can have a basket (cart for courses they want to purchase).
     */
    public function basket()
    {
        return $this->belongsToMany(Bootcamp::class, 'baskets')->withPivot('quantity')->withTimestamps();
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
