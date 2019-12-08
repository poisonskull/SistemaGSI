<?php

namespace App;

use Amenaza;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table = 'noticia';
     
    protected $fillable =[
    	'nombre','nivel','amenaza_01', 'amenaza_02', 'amenaza_03'	
    ];

}
