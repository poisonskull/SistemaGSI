<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amenaza extends Model
{
	protected $table = 'amenaza';
	
    protected $fillable =[
    	'nombre','nivel','control'	
    ];
}
