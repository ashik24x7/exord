<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
     protected $fillable = [
    	'heading',
    	'content',
    	'position',
    	'visibility',
    	'added_by',
    ];
}
