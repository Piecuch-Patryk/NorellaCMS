<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'name', 'content',
    ];
    protected $dates = [
        'updated_at',
    ];
}
