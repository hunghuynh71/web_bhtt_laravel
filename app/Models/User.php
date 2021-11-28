<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
        'permission'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function products(){
        return $this->hasMany(Product::class,'user_id','id');
    }

    public function import_bills(){
        return $this->hasMany(ImportBill::class,'user_id','id');
    }

    public function orders(){
        return $this->hasMany(Order::class,'user_id','id');
    }

    public function promotions(){
        return $this->hasMany(Promotion::class,'user_id','id');
    }

    public function posts(){
        return $this->hasMany(Post::class,'user_id','id');
    }
}
