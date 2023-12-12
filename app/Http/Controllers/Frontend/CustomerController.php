<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function registration()
    {
        return view ('frontend.pages.customer.registration');

    }
    public function registration_store(Request $request)
    {

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect()->route('front.home');
    }
    public function login()
    
    {
        return view ('frontend.pages.customer.login');
    }

   /* public function login_store(Request $request){
        // dd($request);
        $filter=$request->except('_token');
        // dd($filter);
        $login=auth()->attempt($filter);
        if($login){
            return "hello";
        }
        return redirect()->back();
    }*/

    public function login_store(Request $request){

        $val=Validator::make($request->all(),[
            'email'=>'required',
            'password'=>'required',
        ]);

        if($val->fails())
        {
            //notify()->error($val->getMessageBag());
            return redirect()->back();
        }

        $credentials=$request->except('_token');
        // dd($credentials);

        if(auth()->attempt($credentials))
        {
            
            return redirect()->route('food.menu');
        }

        
            return redirect()->back();


    }


    public function logout()
    {
        auth()->logout();
        
        return redirect()->route('home');
    }
}

