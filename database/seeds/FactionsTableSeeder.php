<?php

use Illuminate\Database\Seeder;

class FactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Faction::class, 50)->create();
    }
}
