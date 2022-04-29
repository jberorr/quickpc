<?php

namespace Arvice;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'profession', 'address', 'city'
    ];
}
 