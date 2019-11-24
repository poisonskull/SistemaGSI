<?php

use Illuminate\Database\Seeder;

class noticias_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('noticia')->insert(array(
           'nombre' => "Troyano suplanta las ‘apps’ de siete bancos españoles en Android" ,
           'nivel'  => 3,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
    		));

        \DB::table('noticia')->insert(array(
           'nombre' => "Nuevo tipo de ransomware Wanacry 2.0" ,
           'nivel'  => 5,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
    		));
        \DB::table('noticia')->insert(array(
           'nombre' => "Malware Casbaneiro" ,
           'nivel'  => 2,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
    		));
         \DB::table('noticia')->insert(array(
           'nombre' => "Banxico reporta fallas en transacciones vía SPEI" ,
           'nivel'  => 4,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
    		));
    }
}
