<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if(Auth::id())
        {
        
        
          
           $user = User::find(Auth::id());
          
        


          if($user['usertype']=='user') 
          {
            //return view('homePage');
            return redirect('/');

          }
          elseif($user['usertype']=='admin') 
          {
            return view('home');
          }
          else
          {
            return view('sellers/create');
          }
        }

        
    }

    public function homePage(){
      //  echo 'KKKKK';exit;

        $products = Product::get();
        return view('homePage',['products'=> $products]);
    }

    public function home()
    {
      return view ('home');
    }


  }