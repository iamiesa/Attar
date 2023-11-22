<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Add_Prod;
use App\Models\Cart;
use App\Models\Orders;
use App\Models\LoginUser_;
use Illuminate\Pagination\Paginator;



// use Illuminate\Pagination\LengthAwarePaginator;


class Product extends Controller
{

    //  For Adding or selling Products
    public function ProdView()
    {   
        if(session()->has('user') && session('admin')==1){
            return view('Add_Prod');
        }
        else{
            return redirect('/login');
        }
    }

    //  Storing Data to database
    public function AddProd(Request $req)
    {
        if ($req->hasFile('image')) {
            $file = $req->file('image');

            $this->validate($req, [
                'image' => 'image|mimes:jpeg,jpg,png,jfif|max:2048',
            ]);

            $file_name =  $file->getClientOriginalName();
            $file->move(public_path('upload'), $file_name);
        } else {
            $file_name = null;
        }

        $obj = new Add_Prod();
        $obj->name = $req['name'];
        $obj->price = $req['price'];
        $obj->user_id = session()->get('user')['user_id'];;
        $obj->description = $req['description'];
        if($req['price'] > 1499){
        $obj->category = 'Special';
        }
        else{
            $obj->category = $req['category'];
        }
        $obj->image = $file_name;

        $obj->save();

        return redirect()->route('ProdView');
    }

    //  Showing Products
    public function showProd()
    {
        $data = Add_Prod::paginate(8);
        return view('collected', ['prod' => $data]);
    }
    
//  Special Products Url
    public function special_prod()
    {
        $special = 'Special';
        $data = Add_Prod::where('category',$special)->get();
        return view('special_Prod', ['special' => $data]);
    }

      // Search Page
      public function search(Request $req){
        $query = $req->input('query');
        $data = Add_Prod::where('name','like','%'.$query.'%')->get();
        $arr = [
            'data' => $data,
            'query' => $query
        ];
        return view('search',$arr);

    }


    //  Passing Data to views
    public function getAllData()
    {
        $data = Add_Prod::paginate(4);
        return view('index', ['prod' => $data]);
    }

    //  Product detail 
    public function prod_detail($id)
    {
        $product = Add_Prod::find($id);
        return view('detail_prod', ['product' => $product]);
    }


    //  Saving Data to Cart
    public function cart($id)
    {
        if (session()->has('user')) {
            $obj = new Cart();
            $obj->prod_id = $id;
            $obj->user_id = session()->get('user')['user_id'];
            $obj->save();
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }


//  Getting Cart Itme Count 
     public static function CartItem()
    {
        $uid = session()->get('user')['user_id'];
        $item = Cart::where('user_id', $uid)->get();
        return count($item);
    }


   //  Getting data from Cart

    public function cartlist()
    {
        if (session()->has('user')) {
            $uid = session()->get('user')['user_id'];
            $data = DB::table('carts')
                ->join('add__prods', 'carts.prod_id', 'add__prods.prod_id')
                ->select('add__prods.*', 'carts.cart_id')
                ->where('carts.user_id', $uid)
                ->get();

            return view('cartlist', ['data' => $data]);
        } else {
            echo "<script> alert('Please Login and Add products to cart') </script>";
        }
    }

    //  Romving data from cart
    public function removecart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }

    // Order information
    public function orders()
    {
        if (session()->has('user')) {
            
            $uid = session()->get('user')['user_id'];

            $total = DB::table('carts')
                ->join('add__prods', 'carts.prod_id', "add__prods.prod_id")
                ->where('carts.user_id', $uid)
                ->sum('add__prods.price') ;

            $data = DB::table('carts')
                ->join('add__prods', 'carts.prod_id', "add__prods.prod_id")
                ->where('carts.user_id', $uid)
                ->get() ;
            
            $Arr = [    
                'total' => $total,
                'data' => $data
            ];

            return view('orders', $Arr);
        } else {
            echo "<script> alert('Please Login and Add products to cart') </script>";
        }
    }


    
//  Payment
    public function Order_pay(Request $req)
    {
        $uid = session()->get('user')['user_id'];
        $all_prod = Cart::where('user_id', $uid)->get();

        foreach ($all_prod as $prod) {     
            $order = new Orders();
            $order->user_id = $uid;
            $order->prod_id = $prod->prod_id;
            $order->address =  $req->address;
            $order->pay_mode = $req->payment;
            $order->pay_status = "Pending";
            $order->deliver_status = "Pending";
            $order->save();
            Cart::where('user_id', $uid)->delete();
        }
        return redirect('/');
    }


    // Ordered details
    public function order_summary()
    {
        $uid = session()->get('user')['user_id'];
        $data = DB::table('orders')
            ->join('add__prods', 'orders.prod_id', 'add__prods.prod_id')
            ->where('orders.user_id', $uid)
            ->get();

        return view('order_summary', ['data' => $data]);
    }


  
}
