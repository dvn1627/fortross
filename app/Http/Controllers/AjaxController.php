<?php

namespace Fortross\Http\Controllers;

use Illuminate\Http\Request;
use Fortross\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Hash;
use Session;
use Fortross\Mail\MailPass;
session_start();

class AjaxController extends Controller
{
    public function test(Request $request)
    {
        echo '<h1>Test</h1>';
        //$user = \Auth::user();
        //var_dump($user);
        //$user = User::where(['email'=>'admin@i.ua','password'=>'1111'])->first();
        ///////////
        // $email = 'admin@i.ua';
        // $password = '1111';
        // $remember = true;
        // Session::put('email', $email);
        //  if (Auth::attempt(['email' => $email, 'password' => $password], $remember)){
        //      echo '1';
        //  } else{
        //      echo '0';
        //  }
        /////////////
        //$s = Session::get('email');
        //echo '<h2>s mail='.$s.'</h2>';
        // if(Auth::user()){
        //     echo ' USER '.Auth::user()->name;
        // } else{
        //     echo ' not user';
        // }
        // if(Auth::viaRemember()){
        //     echo ' remembered';
        // } else{
        //     echo ' not rem';
        // }
        Auth::logout();
        //Session::flush();
        //$mail=new MailPass('dvn125@gmail.com','1111');
        //\Mail::to('dvn125@gmail.com')->send($mail);
    }

    public function login(Request $request)
    {
        $remember = true;
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)){
            echo '0';
        } else{
            echo '1';
        }
    }

    public function loginTest(Request $request)
    {
        if(Auth::check()){
            echo '0';
        } else{
            echo '1';
        }
    }
    
    public function adduser(Request $request)
    {
    	$arr = '1234567890';
        $pass = '';
        $length = 5;
        for ($i=0; $i < $length ; $i++) {
            $pass .= $arr[rand(0, strlen($arr) - 1)];
        }
		$email = $request->email;
		$user = User::where('email',$email)->first();
		if (!$user){
			$user = new User;
		}
		$user->name = 'user';
		$user->email = $request->email;
		$user->password = Hash::make($pass);
		$user->save();
		$mail=new MailPass($request->email,$pass);
        \Mail::to($request->email)->send($mail);
		return redirect('admin/users');
	}
	
	public function deleteuser(Request $request)
    {
		$user = User::find($request->id);
		if ($user){
			$user->delete();
		}
		return redirect('admin/users');
	}
}
