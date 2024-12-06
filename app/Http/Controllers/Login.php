<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class Login extends Controller
{
  public function show(): view
  {
    return view("login.index", [
      "tittle" => "Login page",
    ]);
  }
}
