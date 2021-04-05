<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
  public function home(){
      return view('frontend.layouts.index');
  }
  public function index(){
      return view('frontend.layouts.index1');
  }
  public function about(){
    return view('frontend.layouts.about');
}
public function contact(){
    return view('frontend.layouts.contact');
}
public function login(){
    return view('frontend.layouts.login');
}
public function journal(){
    return view('frontend.layouts.journal');
}
public function journal1(){
    return view('frontend.layouts.journal1');
}
public function quickview(){
    return view('frontend.layouts.quickview');
}
}
