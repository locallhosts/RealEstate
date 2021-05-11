<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function abouts(){
       return view('pages.about');
   }

   public function contact(){
    return view('pages.contact');
}

public function agent(){
    return view('pages.agents');
}

public function login(){
    return view('pages.login');
}


public function buysalerent(){
    return view('pages.buysalerent');
}

public function property(){
    return view('pages.propertydetail');
}


}
