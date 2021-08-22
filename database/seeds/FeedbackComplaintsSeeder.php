<?php

use Illuminate\Database\Seeder;

class FeedbackComplaintsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\FeedbackComplaints::class, 5)->create();
        
    }
}
