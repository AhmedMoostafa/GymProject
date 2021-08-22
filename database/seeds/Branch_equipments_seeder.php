<?php

use Illuminate\Database\Seeder;

class Branch_equipments_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Branch_equipments::class, 5)->create();
    }
}
