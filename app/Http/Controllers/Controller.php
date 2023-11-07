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

    public function signup()
    {
        return view('signup');
    }

    public function store(Request $request)
    {
        // // Validate the incoming request data
        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'contact' => 'required|string|max:255',
        //     'email' => 'required|email|unique:login_users', // Ensure email uniqueness in the "login_users" table
        //     'password' => 'required|string|min:8', // Adjust the password requirements as needed
        // ]);

        // Create a new LoginUser instance and populate its properties
        $data = new LoginUser_();
        $data->name = $request['name'];
        $data->contact = $request['contact'];
        $data->email = $request['email'];

        // Use Laravel's Hash to securely store the password
        $data->password = Hash::make($request['password']);

        // Save the user data to the database
        $data->save();
        
        return redirect('/login');
        // Optionally, you can redirect the user to a success page or perform other actions.
        // Example: return redirect()->route('success')->with('message', 'User registered successfully.');
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
