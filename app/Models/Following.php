<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Following extends Model
{
    protected $table = 'followings';

    public function follower()
    {
    	return $this->belongsTo(User::class, 'follower_id', 'id');
    }

    public function following()
    {
    	return $this->belongsTo(User::class, 'following_id', 'id');
    }

    public function scopeSelectFollower($query, $id)
    {
    	return $query->where('follower_id', $id);
    }

    public function scopeSelectFollowing($query, $id)
    {
    	return $query->where('following_id', $id);
    }

    public function resetNewReview()
    {
        $this->new_reviews = 0;
        $this->save();
    }
}
