<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar', 'photo_cover', 'facebook_id', 'review_liciense', 'comment_liciense', 'level', 'language', 'score', 'confirmed', 'about'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    const CONFIRMED = 1;

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function bookRequests()
    {
        return $this->hasMany(BookRequest::class);
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

    public function userBooks()
    {
        return $this->hasMany(UserBook::class);
    }

    public function books()
    {
        return $this->belongsToMany(Book::class, 'user_book');
    }

    public function followers()
    {
        return $this->hasMany(Following::class, 'follower_id', 'id');
    }

    public function followings()
    {
        return $this->hasMany(Following::class, 'following_id', 'id');
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function scopeConfirmation($query, $tokenConfirm)
    {
        return $query->where('token_confirm', $tokenConfirm);
    }

    public function scopeFindUser($query, $facebookId)
    {
        return $query->where('facebook_id', $facebookId);
    }

    public function scopeSearchMember($query, $name)
    {
        return $query->where('name', 'like', '%' . $name . '%');
    }

    public function storeSetting(Request $request)
    {
        try {
            $this->name = $request->name;
            $this->language = $request->language;

            if ($request->avatar) {
                $this->insertImage($request, 'avatar');
            }

            if ($request->photo_cover) {
                $this->insertImage($request, 'photo_cover');
            }

            $this->about = $request->about;
            $this->save();
        } catch (Exception $e) {
            return redirect()->back();
        }
    }

    public function insertImage(Request $request, $imageType)
    {
        try {
            $file = $request->file($imageType);
            $name = $file->getClientOriginalName();
            $name = str_random(5) . '_' . $name;
            $file->move($imageType . 's', $name);
            $this->$imageType = $imageType . 's/' . $name;
        } catch (Exception $e) {
            return redirect()->back();
        }
    }

    public function storePass($password)
    {
        try {
            $this->password = $password;
            $this->save();
        } catch (Exception $e) {
            return redirect()->back();
        }
    }
}
