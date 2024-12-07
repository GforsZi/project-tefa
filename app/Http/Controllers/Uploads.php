<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use App\Models\fotos;
use App\Models\scripts;
use App\Models\vidios;
use App\Models\pages;

class Uploads extends Controller
{
  public function show(): view
  {
    return view("uploads.index", [
      "tittle" => "Uploads page",
      "fotos" => fotos::with("user")
        ->latest()
        ->get(),
      "scripts" => scripts::with("user")
        ->latest()
        ->get(),
      "pages" => pages::with("user")
        ->latest()
        ->get(),
      "videos" => vidios::with("user")
        ->latest()
        ->get(),
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
