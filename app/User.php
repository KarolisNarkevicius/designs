<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getFilePathAttribute()
    {
        return $this->file;
    }

    public function getPhotoPathAttribute()
    {
        return $this->photo;
    }

    public function getPhotoThumbAttribute()
    {
        return $this->photo;
    }

    public function book()
    {
        return $this->belongsTo(Book::class, 'user_id');
    }

    public function books()
    {
        return $this->belongsToMany(Book::class, 'user_book');
    }
}
