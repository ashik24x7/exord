<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Heading extends Model
{
    protected $fillable = [
    	'heading',
    	'content',
    	'path',
    	'position',
    	'visibility',
    	'added_by',
    ];
}
