<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class Setting extends Controller
{
  public function show(): view
  {
    return view("setting.index", [
      "tittle" => "Setting page",
    ]);
  }
}
