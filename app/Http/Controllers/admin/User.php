<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\admin\user as usr;

class User extends Controller
{
    public function login(){
        return view('admin/login');
    }
    public function logins(){
        $data=request()->except('_token');
        $userinfo=usr::where('u_connect',$data['u_account'])->first();
        if($userinfo){
                if($userinfo['u_pwd']==$data['u_pwd']){
                    session(['user'=>['u_id'=>$userinfo['u_id'],'u_name'=>$userinfo['u_connect']]]);
                    return redirect('news/index');
                }else{
                    echo"<script>alert('账户或密码有误');window.history.go(-1);</script>";
                }
        }else{
            echo"<script>alert('账户或密码有误');window.history.go(-1);</script>";
        }
    }
}
