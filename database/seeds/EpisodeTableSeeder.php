<?php

use Illuminate\Database\Seeder;

class EpisodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 20; $i++) {
            $nbCurrentEpisode  = count(App\Episode::where('current', 1)->get());
            $id_saison         = App\Saison::all(['id'])->random()->id;

            $current = ($nbCurrentEpisode < 2) ? rand(0,1) : 0;

            App\Episode::create([
                'n'         => $i,
                'current'   => $current,
                'id_saison' => $id_saison
            ]);
        }
    }
}
