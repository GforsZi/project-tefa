<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create("scripts", function (Blueprint $table) {
      $table->id();
      $table
        ->foreignId("user_id")
        ->constrained(table: "users", indexName: "BY_user_id");
      $table->string("name_script");
      $table->string("url_script");
      $table->string("caption");
      $table->string("description");
      $table->integer("likes");
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists("scripts");
  }
};
