<?php

namespace Arvice;

use Illuminate\Database\Eloquent\Model;

class GuestList extends Model
{
    protected $fillable = [ 
        'email', 'user_id', 'event_id', 'name', 'guest_email', 'attending_status', 'total_guest', 'slug',
    ];
}
  