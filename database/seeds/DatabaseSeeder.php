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
        // $this->call(UserSeeder::class);
//         $this->call(ProvinceSeeder::class);
        $this->call(InitialSeeder::class);
        $this->call(WilayahSeeder::class);
//        $this->call(StateSeeder::class);
    }
}
