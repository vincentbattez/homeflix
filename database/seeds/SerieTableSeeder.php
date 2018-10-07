<?php

use Illuminate\Database\Seeder;

class SerieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 2; $i++) {
            $serieTitle = ($i === 0) ? "Vikings" : "Grey's anatomy";
            App\Serie::create([
                'title' => $serieTitle,
            ]);
        }
    }
}
