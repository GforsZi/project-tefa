<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class Uploads extends Controller
{
  public function show(): view
  {
    return view("uploads.index", [
      "tittle" => "Uploads page",
    ]);
  }
}
