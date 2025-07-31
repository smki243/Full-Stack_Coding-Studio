<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
   use HasFactory;

        public function posts()
        {
            return $this->hasMany(Post::class);
        }
}
