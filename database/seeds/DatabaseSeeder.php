<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    protected $toTruncate = ['users',
        'clients',
        'condition_categories',
        'conditions',
        'other_treatments',
        'medication_infos',
        'medications'
    ];

    public function run()
    {
        foreach ($this->toTruncate as $table){
            DB::table($table)->truncate();
        }
        $this->call([
            UsersTableSeeder::class,
            ConditionCategoryTableSeeder::class,
            MedicationTableSeeder::class
        ]);       

    }
}
