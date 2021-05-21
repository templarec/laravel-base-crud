<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'title',
        'type',
        'price',
        'series',
        'thumb',
        'sale_data',
        'description'
    ];
}
