<?php

use Illuminate\Database\Seeder;
use App\WorkoutSummary;
class WorkoutSummarySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        factory(App\Models\WorkoutSummary::class, 10)->create();

    }
}
