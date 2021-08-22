<?php

use App\Exercise;
use App\Group;
use App\PrivateSession;
use App\Set;
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
    // $this->call(UsersTableSeeder::class);

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
