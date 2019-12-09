<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class amenaza_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    \DB::table('amenaza')->insert(array(
           'nombre' => "Robo " ,
           'nivel'  => 2,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
    		));
        \DB::table('amenaza')->insert(array(
           'nombre' => "Sabotaje" ,
           'nivel'  => 2,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Mal uso" ,
           'nivel'  => 2,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Denegación de servicios" ,
           'nivel'  => 2,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Errores" ,
           'nivel'  => 2 ,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Inyección de código" ,
           'nivel'  => 4 ,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Rompimiento de técnicas de cifrados" ,
           'nivel'  => 1 ,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Bomba lógica " ,
           'nivel'  => 2 ,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Acceso no autorizado" ,
           'nivel'  => 4,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Fuga de información" ,
           'nivel'  =>  5,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Robo de información" ,
           'nivel'  =>  5,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Abuso de privilegios" ,
           'nivel'  => 2,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Alteración de información" ,
           'nivel'  =>  4,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Suplantación de IP" ,
           'nivel'  =>  4,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Ataque de hombre en el medio" ,
           'nivel'  =>  3,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Escalamiento de privilegios" ,
           'nivel'  =>  2,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Malas configuraciones" ,
           'nivel'  =>  3,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Acceso local no autorizado" ,
           'nivel'  =>  4,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Acceso remoto no autorizado" ,
           'nivel'  =>  4,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Buffer overflow" ,
           'nivel'  =>  4,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Ejecución de código no autorizado" ,
           'nivel'  =>  3,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Phishing" ,
           'nivel'  =>  3,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Malware" ,
           'nivel'  =>  3,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Usurpación de identidad" ,
           'nivel'  =>  3,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Sobrecarga de líneas eléctricas" ,
           'nivel'  =>  5,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Vandalismo" ,
           'nivel'  =>  2,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Error humano del mantenimiento" ,
           'nivel'  =>  3,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Penalizaciones por incumplimiento" ,
           'nivel'  =>  4,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Uso de malas prácticas de desarrollo" ,
           'nivel'  =>  4,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Ingeniería social" ,
           'nivel'  =>  2,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    
    \DB::table('amenaza')->insert(array(
           'nombre' => "Conflictos de interés" ,
           'nivel'  =>  3,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Fraude" ,
           'nivel'  =>  4,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Errores del personal" ,
           'nivel'  =>  3,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Inconformidad" ,
           'nivel'  =>  1,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Carga de estrés" ,
           'nivel'  =>  1,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Extorsión" ,
           'nivel'  =>  2,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
		
    }
}
