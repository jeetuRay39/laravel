<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;




class CustomerController extends Controller
{
    public function index(){
        
        return view('customer');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed',
            'password_confirmation'=>'required'
   
         ]);
           
         $customer=new Customer();

         $customer->name=$request->input('name');
         $customer->email=$request->input('email'); 
         $customer->address=$request->input('address');
         $customer->state=$request->input('state');
         $customer->city=$request->input('city');
         $customer->password=$request->input('password');
         $customer->save();
         return redirect('/customer/view');

    }
    public function view(){
        $customers=Customer::all();
        $data=compact('customers');
        return view('customer-view')->with($data);

    }
    public function delete($id){
        $customer=Customer::find($id);
        if(!is_null($customer)){
            $customer->delete();
        }
        return redirect('customer/view');
    }
    public function edit($id){
        $customers=Customer::find($id);
        if(is_null($customers)){
            return redirect('customer/view');

        }
        else{

            $data=compact('customers');
            return view('customer_edit')->with($data);
        }
    }
    public function update($id, Request $request){

        $customer=Customer::find($id);
        $customer->name=$request->input('name');
        $customer->email=$request->input('email'); 
        $customer->address=$request->input('address');
        $customer->state=$request->input('state');
        $customer->city=$request->input('city');
        $customer->password=$request->input('password');
        $customer->save();
        return redirect('customer/view');


    }
}
