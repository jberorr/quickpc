<?php

namespace Arvice;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'category', 'profession', 'about', 'photo1', 'photo2', 'slug', 'city', 
    ];


}
 