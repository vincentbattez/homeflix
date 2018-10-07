<?php

use Illuminate\Database\Seeder;

class SaisonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 12; $i++) {
            App\Saison::create([
                'n'        => $i,
                'id_serie' => App\Serie::all(['id'])->random()->id,
            ]);
        }
    }
}
