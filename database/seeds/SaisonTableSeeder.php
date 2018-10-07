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
            $nbCurrentEpisode  = count(App\Saison::where('current', 1)->get());

            $current = ($nbCurrentEpisode < 2) ? rand(0,1) : 0;
            $viewed  = ($nbCurrentEpisode > 0) ? 1 : 0;

            App\Saison::create([
                'id_serie' => App\Serie::all(['id'])->random()->id,
                'n'        => $i,
                'current'  => $current,
                'viewed'   => $viewed,
            ]);
        }
    }
}
