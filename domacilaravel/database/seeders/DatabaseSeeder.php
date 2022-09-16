<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\TimSeeder;
use Database\Seeders\IgracSeeder;
use Database\Seeders\TrenerSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $timSeeder = new TimSeeder();
        $igracSeeder = new IgracSeeder();
        $trenerSeeder = new TrenerSeeder();

        $timSeeder->run();
        $igracSeeder->run();
        $trenerSeeder->run();
    }
}
