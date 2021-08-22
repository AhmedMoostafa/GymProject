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
        $exercises = factory(Exercise::class, 20)->create();
    $sets = factory(Set::class, 20)->create();
    $groups = factory(Group::class, 20)->create();

    $exercises->each(function ($exercise) use ($sets, $groups) {
      $exercise->sets()->save($sets->random(), ['break_duration' => '1 hour']);
      $exercise->groups()->save($groups->random(), ['break_duration' => '1 hour']);
    });

    $sets->each(function ($set) use ($groups) {
      $set->groups()->save($groups->random(), ['break_duration' => '1 hour']);
    });

    factory(PrivateSession::class, 20)->create();
    }

}
