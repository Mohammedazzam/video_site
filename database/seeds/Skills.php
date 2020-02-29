<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Skills extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();//هيك بكريت داتا غير حقيقية

        for($i = 0 ;$i< 10 ;$i++){
            $array = [
                'name' => $faker->word,//عبارة عن كلمة
            ];
            \App\Models\Skill::create($array);
        }
    }
}
