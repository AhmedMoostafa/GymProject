<?php

use Illuminate\Database\Seeder;
use App\Models\Meal;
use App\Models\Item;
use App\Models\Plan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([ItemSeeder::class]);
        $this->call([MealSeeder::class]);
        $this->call([PlanSeeder::class]);
        $this->call([FitnessSummarySeeder::class]);

        //Many to Many relationships
        $meals = Meal::get();
        $items = Item::get();
        $plans = Plan::get();

        $items->each(function ($item) use ($meals, $plans) {
            $item->meals()->save($meals->random(), ['quantity' => 1]);
            $item->plans()->save($plans->random(), ['quantity' => 1, 'time' => now()]);
        });

        $meals->each(function ($meal) use ($plans) {
            $meal->plans()->save($plans->random(), ['type' => 'dinner']);
        });
    }
}
