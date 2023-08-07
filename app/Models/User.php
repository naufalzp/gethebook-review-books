<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Support\Facades\URL;
// use App\Models\Role;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'email_verified_at',
        'verification_code',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function isAdmin()
    {
        return $this->role->name === 'admin';
    }
    public function wishlist()
    {
        return $this->belongsToMany(Book::class, 'wishlists')->withTimestamps();
    }
    public function books()
    {
        return $this->belongsToMany(Book::class, 'wishlists')
            ->withTimestamps()
            ->withPivot('marked_as_read');
    }

public function sendEmailVerificationNotification()
{
    $verificationCode = sha1(time());
    $this->verification_code = $verificationCode;
    $this->save();

    $verificationUrl = URL::route('verification.verif', $verificationCode);

    $this->notify(new VerifyEmail($verificationUrl));
}
}
