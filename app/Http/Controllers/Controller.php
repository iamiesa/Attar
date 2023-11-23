<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\LoginUser_;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Hash; 
//  For Mail 
use Illuminate\Support\Facades\Mail;
use App\Mail\AttarEcom;



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
      $req->session()->put('admin',$user->admin);


        return redirect('/');
       }
    }


    //  ============== Forget Passwords =================
    public function forget_pass(){
        return view('forget_pass');

    }
    
    public function forget_pass_verify_user(Request $req){
        $email = LoginUser_::where(['email'=>$req->email])->orWhere(['name'=>$req->name])->first();

        $data = compact('email');
        
        if (!empty($data)){
            return view('forget_pass_update_data',['data'=>$data]);
        }
        else{
           return "Email / User Name Not Found ";
          
        }

    }

   public function update_user_password($user_id,Request $req){

        $user = LoginUser_::where(['user_id'=>$user_id])->first();
        $user->name = $req->name;
        $user->contact =  $req->contact;
        $user->email =  $req->email;
        $user->password = Hash::make( $req->password);
        $user->save();

        return redirect('/');
   }


//  ============ Testing Email ================
   public function SendMail(){
    $mailData =  [
        'title'=> 'Mail From Attar Ecom ',
        'body' => ' Testing the Mail'
    ];

    Mail::to('afnanbhate7@gmail.com')->send(new AttarEcom($mailData));
   
    dd('Email Send Successfully..');
}

}
