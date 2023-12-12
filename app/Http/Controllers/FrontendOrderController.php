<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Order;
use Illuminate\Http\Request;

class FrontendOrderController extends Controller
{
    public function foodorder()
    {
        $menus = Menu::all();
        return view ('frontend.pages.order.foodorder', compact('menus'));
    }
    public function food_store (Request $request)
    { 
        // dd($request->all());
        Order::create([
            'qty' => $request->qty,
            'full_name' => $request->full_name,
            'contact' => $request->contact,
            'email' => $request->email,
            'address' => $request->address
        ]);
        return redirect()->route('front.home');

        // return view('frontend.pages.category.foodmenu');
        // dd('jone');
    }

    public function foodorder_page(){
        return view('frontend.pages.category.foodmenu');
    }
}
