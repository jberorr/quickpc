<?php

namespace Arvice;

use Illuminate\Database\Eloquent\Model;

class GuestPhone extends Model
{
    protected $fillable = [
        'phone', 'user_id', 'relation', 'name',
    ];
}
