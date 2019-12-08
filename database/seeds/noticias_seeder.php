<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class noticias_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
        \DB::table('noticia')->insert(array(
           'nombre' => "Troyano suplanta las ‘apps’ de siete bancos españoles en Android" ,
           'nivel'  => 3,
           'amenaza_01' => $faker->randomElement([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20]),
           'amenaza_02' => $faker->randomElement([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20]),
           'amenaza_03' => $faker->randomElement([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20]),
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
    		));

        \DB::table('noticia')->insert(array(
           'nombre' => "Nuevo tipo de ransomware Wanacry 2.0" ,
           'nivel'  => 5,
           'amenaza_01' => $faker->randomElement([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20]),
           'amenaza_02' => $faker->randomElement([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20]),
           'amenaza_03' => $faker->randomElement([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20]),
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
    		));
        \DB::table('noticia')->insert(array(
           'nombre' => "Malware Casbaneiro" ,
           'nivel'  => 2,
           'amenaza_01' => $faker->randomElement([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20]),
           'amenaza_02' => $faker->randomElement([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20]),
           'amenaza_03' => $faker->randomElement([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20]),
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
    		));
         \DB::table('noticia')->insert(array(
           'nombre' => "Banxico reporta fallas en transacciones vía SPEI" ,
           'nivel'  => 4,
           'amenaza_01' => $faker->randomElement([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20]),
           'amenaza_02' => $faker->randomElement([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20]),
           'amenaza_03' => $faker->randomElement([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20]),
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
    		));
    }
}
