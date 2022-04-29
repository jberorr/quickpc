<?php

namespace Arvice;

use Illuminate\Database\Eloquent\Model;

class GuestEmail extends Model
{
    protected $fillable = [
        'email', 'user_id', 'relation', 'name',
    ];
}
