<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activo extends Model
{
    protected $table = 'activo';
	
    protected $fillable =[
    	'nombre','version', 'ultima_actualizacion'
    	,'ultimo_incidente','proxima_revision',
    	'datos_responsable','tel_responsable','cyber_percent'
    ];


}
