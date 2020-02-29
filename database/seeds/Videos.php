<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Videos extends Seeder
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
                'meta_keywords' => $faker->name,
                'meta_des' => $faker->name,
                'cat_id' =>1,
                'youtube' =>'https://www.youtube.com/watch?v=X3sIek20fVU&list=PLo-dduytL5_DIss4fOyHDc0l5rE_smqy5&index=14&t=0s',
                'published'=> rand(0,1), //هيك شوية راح يشتغل ب 0 وشوية راح يشتغل ب 1
                'image' => '1581804683HkoEuepMzd.jpg', //اسم الصورة
                'des' => $faker->paragraph, //هيك بضيف نص لحالو
                'user_id' =>1
            ];
            \App\Models\Video::create($array);
        }
    }
}
