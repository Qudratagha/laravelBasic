<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserRollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\UserRoll::factory()->times(5)->create();

    }
}
