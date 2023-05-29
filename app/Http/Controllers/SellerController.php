<?php

namespace App\Http\Controllers;
use App\Models\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function create(){
        
        return view('sellers/create');
    }

    public function store(Request $request)
    {
       $seller = new Seller();
       $seller->name = $request->name;
       $seller->mobile = $request->mobile;
       $seller->shop_name = $request->shop_name;
       $seller->shop_address = $request->shop_address;

       
       $seller->save();
       echo ("Seller Record saved successfully.");


        return redirect()->route('create-product');
    }

    public function index(){
        $sellers = Seller::all();  //eloquent method
        
        return view('sellers/list',['sellers'=>$sellers]);
       
       
    }

    public function edit($id)
    {
        $sellers = Seller::where('id','=',$id)->get();
        
        return view('sellers/edit',['sellers'=>$sellers]);
          
    }

    public function update(Request $request, $id){
        $seller = Seller::find($id);
        $seller->name = $request->input('name');
        $seller->mobile = $request->input('mobile');
        $seller->shop_name = $request->input('shop_name');
        $seller->shop_address = $request->input('shop_address');
        
        $seller->save();
        return redirect()->route('list-seller');
    }

    public function destroy(Request $request, $id)
    {
        Seller::destroy($request->all());
        Seller::whereId($id)->delete($request->all());
   
       
       echo (" Record deleted successfully.");
       return redirect()->back();
    }
}
