<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use Session;
use File;
// use Storage;


class ProductController extends Controller
{
    //
    
   public function index(){
    $products = Product::all();
    
    
    return view('products/list', compact('products'));
   }
   
   public function create(){
        
    return view('products/create');
}
  
public function store(Request $request)
{
    $product = new Product();

    $fileName = auth()->id() . '_' . time() . '.'. $request->image->extension();  

        $type = $request->image->getClientMimeType();
        $size = $request->image->getSize();

        $request->image->move(public_path('product-images'), $fileName);
   
   $product->image = $fileName;
   $product->name = $request->name;
   $product->price = $request->price;
   $product->stack = $request->stack;
   $product->description = $request->description;
//    $seller = app('App\Http\Controllers\SellerController')->seller();
//    $product->seller();
   $product->save();
   echo ("Product Record saved successfully.");
   return redirect()->route('list-product');
  
}

public function edit($id)
{
    $products = Product::where('id','=',$id)->get();
    return view('products/edit',['products'=>$products]);
}

public function destroy(Request $request, $id)
    {
        Product::destroy($request->all());
        Product::whereId($id)->delete($request->all());
         
       echo ("Product Record deleted successfully.");
       return redirect()->back();
    }

    public function update(Request $request, $id){

        
    $fileName = auth()->id() . '_' . time() . '.'. $request->image->extension();  

    $type = $request->image->getClientMimeType();
    $size = $request->image->getSize();

    $request->image->move(public_path('product-images'), $fileName);
        $product = Product::find($id);
        $product->image =  $fileName;
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->stack = $request->input('stack');
        $product->description = $request->input('description');
        $product->save();
       
        if ($request->input('oldimg')!= ""){
            $path = public_path('product-images/'.$request->input('oldimg'));
            unlink($path);
        }
            
        
        return redirect()->route('list-product');
    }

    
 public function show()
{
    $product = Product::get();
    // $fileName = auth()->id() . '_' . time() . '.'. $request->image->extension();  

    // $type = $request->image->getClientMimeType();
    // $size = $request->image->getSize();

    // $request->image->move(public_path('product-images'), $fileName);
       
    //     $product->image =  $fileName;
        $product->name = ('name');
        $product->price = ('price');
        $product->stack = ('stack');
        $product->description = ('description');
        // $product->save();
   
   return view('products/show');
}
    
}


