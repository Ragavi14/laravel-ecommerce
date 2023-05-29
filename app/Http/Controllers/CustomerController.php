<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request ;
use App\Models\Customer;
use App\Models\User;
use Auth;


class CustomerController extends Controller
{
    //
   
    public function destroy(Request $request, $id)
    {
        Customer::destroy($request->all());
        Customer::whereId($id)->delete($request->all());
    //    $customers = Customer::delete($id);
       
       echo ("Customer Record deleted successfully.");
       return redirect()->back();
    }


    public function index(){

        // $users = User::all();
        // if($user['usertype']=='user') 
        // {
        //     return view('customers/list',['users'=>$users]); 
        // }




        // $user_id = Auth::usertype('user')->id;
        // $user_name = Auth::usertype('user')->name;
        $customers = Customer::all();  //eloquent method
        // echo '<pre>';
        // print_r($customer);
        return view('customers/list',['customers'=>$customers]);
        //print_r("lll");die();
        // return view('list-customer',compact('user_id','user_name'));
       
    }

    public function edit($id)
    {
        $customers = Customer::where('id','=',$id)->get();
        // $customers = Customer::get();
        //return view('customers/edit', compact('customers'));
        // print_r(json_encode($customers));die();  where('id'->$id)->get();
        return view('customers/edit',['customers'=>$customers]);
          // $customers = Customer::whereId($id)->get();                                                              
        // if (Customer::find($id==0)) {
        // return view('customers/create',['customers'=>$id]);
        // }
        
        // else {
        // return view('customers/edit',['customers'=>$id]);
        // }
    }


    // public function edit(Request $request, $id){
    //     $name = $request->input('name');
    //     $address = $request->input('address');
    //     $mobile = $request->input('mobile');
    //     DB::update('update customer set name = ?, address = ?, mobile = ? where id = ?',[ $name, $address, $mobile]);
    //     echo "Record updated successfulley";
    //     // return view('customers/edit', compact('customers'));
    //     return redirect()->route('edit-customer');
    // }  


    // public function update(Request $request, $id){
    //         $request->validate([
    //             'name' => 'required',
    //             'address' => 'required',
    //             'mobile' => 'required'
    //         ]);
    //         $id->update($request->all());
    //         return redirect()->route('list-customer');
    // }


    public function update(Request $request, $id){
        $customer = Customer::find($id);
        $customer->name = $request->input('name');
        $customer->address = $request->input('address');
        $customer->mobile = $request->input('mobile');
        $customer->save();
        return redirect()->route('list-customer');
    }

    // public function delete($id){
    //     $customers = Customer::delete($id);
    //     return view('customers/create',['customers'=>$customers]);
    // }

//     public function destroy(){
//     $customers = Customer::all();
//     return redirect()->route('delete-customer')
//          ->withSuccess(__('Post delete successfully.'));
// }

    public function create(){
        
        return view('customers/create');
    }

    public function store(Request $request)
    {
       $customer = new Customer();
       $customer->name = $request->name;
       $customer->address = $request->address;

       $customer->mobile = $request->mobile;
       $customer->save();
       echo ("Customer Record saved successfully.");

        // $newcustomer = customer::create([
        //     'name' => $request->name,
        //     'address' => $request->address,
        //     'mobile' => $request->mobile,
        // ]);

        return redirect()->route('list-customer');
    }

}
