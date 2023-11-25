<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function list()
    {
        return view ('admin.pages.delivery.list');
    }
    
}
