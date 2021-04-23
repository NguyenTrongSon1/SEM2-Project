<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class loginController extends Controller
{


    public function getLogin()
    {
        return view('front.login.login');
    }
    public function postLogin(Request $req)
    {
       $arr = [
           'email'=>$req->email,
           'password'=>$req->password,
       ];
       if (Auth::guard('user')->attempt($arr)){
           return view('front.admin.admin');
       }
       else{
           dd('tk mk khong chinh xac');
       }
    }




}
