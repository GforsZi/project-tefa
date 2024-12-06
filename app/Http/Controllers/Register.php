<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class Register extends Controller
{
  public function show(): view
  {
    return view("register.index", [
      "tittle" => "Register page",
    ]);
  }
}
