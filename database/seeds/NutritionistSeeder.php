<?php

use Illuminate\Database\Seeder;

class NutritionistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Models\Nutritionist::class, 5)->create();
    }
}
