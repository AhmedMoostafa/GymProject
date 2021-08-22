<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        $this->call(QuestionSeeder::class);
        $this->call(AnswerSeeder::class);
        $this->call(InvitationSeeder::class);
        $this->call(SupplementarySeeder::class);
        $this->call(AnnouncementsSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(PaymentSeeder::class);
        $this->call(FeedbackComplaintsSeeder::class);

    }
}
