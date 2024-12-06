<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class pages extends Model
{
    /** @use HasFactory<\Database\Factories\PagesFactory> */
    use HasFactory;
      protected $guarded = ["id", "timestamps"];
  
  protected $with = ["user"];

  public function user(): BelongsTo
  {
    return $this->belongsTo(User::class);
  }
}
