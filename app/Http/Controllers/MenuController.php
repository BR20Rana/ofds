<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function list()
    {
        return view ('admin.pages.menu.list');

 
    }
    public function menu()
    {
        return view ('admin.pages.menu.addmenu');
    }
    public function store(Request $request)
    {
        Menu::create([
            'food_name'=>$request->FoodName ,
            'food_type'=>$request->FoodType ,
            'food_quantity'=>$request->FoodQuantity ,
            'food_price'=>$request->FoodPrice
        ]);
    }
}

