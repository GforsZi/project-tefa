<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class Home extends Controller
{
  public function show(): view
  {
    return view("home.index", [
      "tittle" => "Home page",
    ]);
  }
}
