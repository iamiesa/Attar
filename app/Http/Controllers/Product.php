<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use App\Models\Add_Prod;
class Product extends Controller
{
    public function ProdView(){
        return view('Add_Prod');

    }
    public function AddProd(Request $req){
     
        if ($req->hasFile('image')) {
            $file = $req->file('image');
            
            // Validate file
            $this->validate($req, [
                'image' => 'image|mimes:jpeg,jpg,png|max:2048', // 2MB limit
            ]);
            
            $file_name =  $file->getClientOriginalName();
            
            // Move the uploaded file to a public directory
            $file->move(public_path('upload'), $file_name);
        } else {
            // Handle the case where no image was uploaded
            $file_name = null; // Set a default or handle it as needed
        }

        $obj = new Add_Prod();
        $obj->name = $req['name'];
        $obj->price = $req['price'];
        $obj->description = $req['description'];
        $obj->category = $req['category'];
        $obj->image = $file_name; 
        
        $obj->save(); 

        return redirect()->route('ProdView');
        

    }

    public function showProd(){
        $data = Add_Prod::all();
        return view('collection',['prod'=>$data]);
    }

    public function getAllData() { 
        $data = Add_Prod::all(); 
        return view('index',['prod'=>$data]);      
    }


    public function prod_detail($id) {
        $product = Add_Prod::find($id);
        return view('detail_prod', ['product' => $product]);
        // Check if the product was found
        // if ($product) {
        // } else {
        //     // Handle the case where the product was not found, e.g., show an error page or redirect to a 404 page.
        //       echo"No Data Found";
    // }
    
}



}