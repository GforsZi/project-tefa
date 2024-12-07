<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use App\Models\fotos;
use App\Models\vidios;
use App\Models\scripts;
use App\Models\pages;

class User extends Authenticatable
{
  /** @use HasFactory<\Database\Factories\UserFactory> */
  use HasFactory, Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $guarded = ["id", "timestamps"];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */
  protected $hidden = ["password", "remember_token"];

  /**
   * Get the attributes that should be cast.
   *
   * @return array<string, string>
   */
  public function fotos(): HasMany
  {
    return $this->hasMany(fotos::class);
  }
  public function vidios(): HasMany
  {
    return $this->hasMany(vidios::class);
  }
  public function scripts(): HasMany
  {
    return $this->hasMany(scripts::class);
  }
  public function pages(): HasMany
  {
    return $this->hasMany(pages::class);
  }

  protected function casts(): array
  {
    return [
      "password" => "hashed",
    ];
  }
}
