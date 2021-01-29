<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'vol',
    ];
}
