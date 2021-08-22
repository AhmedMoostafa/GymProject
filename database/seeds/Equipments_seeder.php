<?php

use Illuminate\Database\Seeder;

class Equipments_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Classes::class, 5)->create();

    }

}
