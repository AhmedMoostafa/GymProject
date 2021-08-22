<?php

use Illuminate\Database\Seeder;

class Class_member_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Class_member::class, 5)->create();
    }
}
