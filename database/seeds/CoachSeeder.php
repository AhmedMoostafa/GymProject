<?php

use Illuminate\Database\Seeder;
use App\Models\Coach;
class CoachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\Models\Coach::class, 5)->create();
    }
}
