<?php

use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $context = $this;
        factory(App\User::class, 50)->create()->each(function ($u) {
            factory(App\Client::class, 1)->create(['user_id'=>$u->id])->each(function ($c){
                factory(App\HealthHistory::class, 1)->create(['client_id'=>$c->id])->each(function ($hh){
                    factory(App\OtherTreatment::class,3)->create(['health_history_id'=> $hh->id]);
                    factory(App\MedicationInfo::class,3)->create(['health_history_id'=> $hh->id]);
                    factory(App\Condition::class,3)->create(['health_history_id'=> $hh->id]);

                });
            });
        });
    }
}
