<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    factory(Category::class)->create(['name' => 'PHP']);
    factory(Category::class)->create(['name' => 'Laravel']);
    factory(Category::class)->create(['name' => 'Vue']);
    factory(Category::class)->create(['name' => 'JS']);
    factory(Category::class)->create(['name' => 'CSS']);
  }
}
