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
        $faker = Faker::create();
	for ($i=0; $i < 20; $i++) {
    	\DB::table('amenaza')->insert(array(
           'nombre' => "Amenaza " . $i ,
           'nivel'  => $faker->randomElement([1,2,3,4,5]),
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
    		));
		}
    }
}
