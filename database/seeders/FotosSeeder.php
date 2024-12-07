<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\fotos;
use App\Models\User;

class FotosSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    fotos::factory(5)
      ->recycle([User::factory(3)->create()])
      ->create();
  }
}
