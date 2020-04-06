<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'comment',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
