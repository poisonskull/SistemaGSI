<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call("amenaza_seeder");
        $this->call("noticias_seeder");
        $this->call("activo_seeder")
    }
}
