<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
 public function orderlist ()
 {
    return view ('admin.pages.order.orderlist');
 }
 public function addorder ()
 {
   return view ('admin.pages.order.addorder');
   
}
}
