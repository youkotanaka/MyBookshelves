<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $primaryKey = 'id';   //暫定

    protected $fillable = [
        'title',
        'vol',
    ];
}
