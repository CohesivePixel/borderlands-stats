<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(SystemsTableSeeder::class);
        $this->call(FactionsTableSeeder::class);
        $this->call(FSDTableSeeder::class);
    }
}
