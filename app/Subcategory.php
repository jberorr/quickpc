<?php

namespace Arvice;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = [
        'name', 'belongs_to',
    ];
}
