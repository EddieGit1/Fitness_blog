<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogItem extends Model
{
    //
    protected $fillable = [
        'firstname',
        'blogtitle',
        'categories',
        'textarea'
    ];
}
