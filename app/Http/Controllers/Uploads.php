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
  public function show_ins(): view
  {
    return view("uploads.insert", [
      "tittle" => "insert uploads page",
    ]);
  }
  public function show_edt(): view
  {
    return view("uploads.edit", [
      "tittle" => "edit uploads page",
    ]);
  }
  public function show_ctgy(): view
  {
    return view("uploads.byCategories", [
      "tittle" => "category uploads page",
    ]);
  }
}
