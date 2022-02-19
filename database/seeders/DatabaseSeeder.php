<?php

namespace Database\Seeders;

use App\Models\Student;
use Carbon\Factory;
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
        //    \App\Models\User::factory(10)->create();
        $this->call([UserSeeder::class]);
        $this->call([categorySeeder::class]);
        $this->call([ProductSeeder::class]);
        $this->call([StudentSeeder::class]);
        $this->call([RollSeeder::class]);
    }
}
