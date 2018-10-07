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
        $this->call(SerieTableSeeder::class);
        $this->call(SaisonTableSeeder::class);
        $this->call(EpisodeTableSeeder::class);
    }
}
