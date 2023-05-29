<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use App\Models\Seller;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users/index', compact('users'));

        

    }


    public function list()
    {
        
            $users = User::all();

        if('usertype'=='user') 
        {
          //return view('homePage');
        //   return redirect('/');
          return view('customers/list',['users'=>$users]);

        }
        elseif('usertype'=='seller') 
        {
            return view('sellers/list',['users'=>$users]);
        }
        else
        {
          return view('home');
        }
    
    }
}
