<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\webxaydungnha;
Session_start();

class admincontroller extends Controller
{
    public function index(){
        return view('admin_login');
    }
    public function show_dashboard(){
        return view('admin.dashboard');
    }
    public function dashboard(Request $request){
        $taikhoan = $request->Taikhoan;
        
        $MatKhau = md5($request->Matkhau);
        

        $result = DB::table('taikhoan')->where('TenTaiKhoan',$taikhoan)->where('MatKhau', $MatKhau)->where('LoaiTaiKhoan',1)->first();
        if($result)
        {
            Session::put('admin_name',$result->TenTaiKhoan);
            Session::put('admin_id',$result->MaTaiKhoan);
            return Redirect::to('/dashboard');
            
        }
        else
        {
            Session::put('message','Tài khoản hoặc mật khẩu không chính xác hoặc đây không phải tài khoản admin:');
            return Redirect::to('/admin');
        }
    }
    public function logout(){
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/admin');
    }
}
