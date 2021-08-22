<?php

use Illuminate\Database\Seeder;

class classCoachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Models\ClassCoach::class, 5)->create();

    }
}
