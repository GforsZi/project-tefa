<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class Profile extends Controller
{
  public function show(): view
  {
    return view("profile.index", [
      "tittle" => "Profile page",
    ]);
  }
}
