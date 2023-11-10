<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // Use the appropriate Request class
// use GuzzleHttp\Psr7\Request;
use App\Models\LoginUser_;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Hash; // Use Laravel's built-in Hash for password hashing

use function Laravel\Prompts\alert;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    //  For Sign-up Pages
    public function signup()
    {
        return view('signup');
    }

    public function store(Request $request)
    {
        
        $data = new LoginUser_();
        $data->name = $request['name'];
        $data->contact = $request['contact'];
        $data->email = $request['email'];
        $data->password = Hash::make($request['password']);
        $data->save();
        
        return redirect('/login');
        
    }

    // Login Pages
    public function loginView()
    {
        return view('login');
    }

    public function login(Request $req){
        
       $user=  LoginUser_::where(['email'=>$req->email])->first();

       if( !$user || !Hash::check($req->password, $user->password)){
        echo" User Name And Password Are Worng";
       }
       else{
      $req->session()->put('user',$user);
      $req->session()->put('name',$user->name);
      $req->session()->put('id',$user->user_id);

        return redirect('/');
       }
    }

}
