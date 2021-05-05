<?php

use Illuminate\Database\Seeder;

class FSDTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\FSData::class, 50)->create();
    }
}
