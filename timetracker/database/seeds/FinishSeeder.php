<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class FinishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        DB::table('alldatas')
                ->where('finish_time', NULL)
                ->update(['finish_time' => (Carbon::now('Europe/Tallinn')->addSeconds($faker->numberBetween($min = 5, $max = 15)))]);
    }
}
