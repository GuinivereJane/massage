<?php

use Illuminate\Database\Seeder;


class ConditionCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\ConditionCategory::class, 5)->create()->each(function ($cc){
            factory(App\Condition::class,3)->create(['condition_category_id'=> $cc->id]);

        });

    }
}
