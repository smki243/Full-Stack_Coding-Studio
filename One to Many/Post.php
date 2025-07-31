<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Jika relasinya ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
