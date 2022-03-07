<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $arr = ['admin','super admin', 'DEO'];
//        foreach ($arr as $ar)
//        {
//            DB::table('rolls')->insert(['rollName' => $ar, 'rollDesc' => "testing"]  );
//        }
        \App\Models\Rolls::factory()->times(5)->create();
    }
}
