<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\LoaiSanPham;

class DangNhap extends Controller
{
    public function Login(Request $request) {
    	$username = $request['username'];
    	$password = $request['password'];
        $loaisp = LoaiSanPham::all();
        if(Auth::attempt(['username'=>$username,'password'=>$password])){
            if($username == 'admin'){
                return view('admin/adminForm');
            }
            else{
                return view('welcome',['user'=>Auth::user(), 'loaisp'=>$loaisp]);
            }
        }
        else{
            return view('form-login',['error'=>'Tài khoản hoặc mật khẩu không chính xác!!']);
        }
    }

    public function Logout() {
        $loaisp = LoaiSanPham::all();
        Auth::logout();
        return view('welcome',['loaisp'=>$loaisp]);
    }
}
    