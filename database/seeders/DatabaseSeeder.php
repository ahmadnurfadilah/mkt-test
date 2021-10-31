<?php

namespace Database\Seeders;

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
        $this->call(KelasSeder::class);
        $this->call(SiswaSeder::class);
        $this->call(RawSeder::class);
    }
}
