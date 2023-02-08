<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Product extends Controller
{
  public function index()
  {
    return view('content.home.product.index');
  }
  public function detail()
  {
    return view('content.home.product.detail');
  }
}
