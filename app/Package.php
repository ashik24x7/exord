<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
    	'heading',
    	'content',
    	'path',
    	'price',
    	'position',
    	'visibility',
    	'added_by',
    ];
}
