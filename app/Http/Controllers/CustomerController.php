<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Customer;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Customer::all();
        return view('customer.index',['customers'=>$data]);
    }

    public function delete($id){
        $delete=DB::table("customers")
        ->where("id","=",$id )
        ->delete();
        return redirect('/customer')->with('deleted','Customer deleted successfully.');
    }

    public function store(Request $req){
        //dd($req);
        $validated=$req->validate([
            "fname"=>['required'],
            "lname"=>['required'],
            "email"=>['required','email'],
            "contact"=>['required'],
            "address"=>['required'],
        ]);

        $customer=Customer::create($validated);

        return redirect()->back()->with('success','Customer Added Successfully');

    }
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            "fname"=>['required'],
            "lname"=>['required'],
            "email"=>['required','email'],
            "contact"=>['required'],
            "address"=>['required'],
        ]);

        $id = $request->id;
        $fname = $request->fname;
        $lname = $request->lname;
        $email = $request->email;
        $contact = $request->contact;
        $address = $request->address;

        Customer::where('id','=',$id)->update([
            'fname' => $fname,
            'lname' => $lname,
            'email' => $email,
            'contact' => $contact,
            'address' => $address,
        ]);

        return redirect()->back()->with('success','Customer Updated Successfully');
    }

}
