<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $fillable = [
        'author',
        'description',
        'title',
        'category_id',
        'number_pages',
        'publish_date',
        'image',
        'rate',
        'score',
        'price',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function userBooks()
    {
        return $this->hasMany(UserBook::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_book');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function scopeBookCategory($query, $categoryId)
    {
        return $query->where('category_id', $categoryId);
    }
}
