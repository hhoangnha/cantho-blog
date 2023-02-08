<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Blog extends Controller
{
  public function index()
  {
    return view('content.home.blog.index');
  }
  public function detail()
  {
    return view('content.home.blog.detail');
  }
}
