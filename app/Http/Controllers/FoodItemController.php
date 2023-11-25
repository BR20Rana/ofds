<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodItemController extends Controller
{
        public function list()
        {
            return view ('admin.pages.fooditem.list');
        }
        }

