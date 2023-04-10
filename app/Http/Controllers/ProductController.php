<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Product::all();
        return view('product.index',['products'=>$data]);
    }
    public function delete($id){
        $delete=DB::table("products")
        ->where("id","=",$id )
        ->delete();
        return redirect('/product')->with('deleted','Product deleted successfully.');
    }

    public function store(Request $req){
        //dd($req);
        $validated=$req->validate([
            "prodname"=>['required'],
            "quantity"=>['required'],
            "price"=>['required'],
        ]);

        $customer=Product::create($validated);

        return redirect()->back()->with('success','Product Added Successfully');

    }
    public function update(Request $request, Product $customer)
    {
        $request->validate([
            "prodname"=>['required'],
            "quantity"=>['required'],
            "price"=>['required'],
        ]);

        $id = $request->id;
        $prodname = $request->prodname;
        $quantity = $request->quantity;
        $price = $request->price;

        Product::where('id','=',$id)->update([
            'prodname' => $prodname,
            'quantity' => $quantity,
            'price' => $price,
        ]);

        return redirect()->back()->with('success','Product Updated Successfully');
    }

   
}
