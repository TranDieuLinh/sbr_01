<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MarkRead extends Model
{
    protected $table = 'mark_reads';

    protected $fillable = [
        'user_id',
        'book_id',
        'is_completed',
    ];
}
