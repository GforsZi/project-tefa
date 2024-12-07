<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\pages;
use App\Models\User;

class PagesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    pages::factory(5)
      ->recycle([User::factory(3)->create()])
      ->create();
  }
}
