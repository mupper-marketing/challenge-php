<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;

class WelcomeController extends Controller
{
  public function index()
  {
    $animais = Animal::all();
    return view('welcome',compact('animais'));
  }
}
