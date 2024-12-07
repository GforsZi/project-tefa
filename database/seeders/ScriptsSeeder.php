<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\scripts;
use App\Models\User;

class ScriptsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    scripts::factory(5)
      ->recycle([User::factory(3)->create()])
      ->create();
  }
}
