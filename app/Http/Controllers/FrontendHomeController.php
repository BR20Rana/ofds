<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontendHomeController extends Controller
{
   public function home()
   {
    return view ('frontend.master');
    
   }

}

