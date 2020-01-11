<?php

use App\{Category, Task};
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $categories = Category::all();

    $tasks = factory(Task::class)->times(8)->make();
    foreach($tasks as $task) {
      $category = $categories->random();
      $category->tasks()->save($task);
    }
  }
}
