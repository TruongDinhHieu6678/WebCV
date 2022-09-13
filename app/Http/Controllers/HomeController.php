<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\webxaydungnha;
Session_start();

class HomeController extends Controller
{
    public function index(){
        $NhaCap4= DB::table('congtrinh')->join('ctcongtrinh','congtrinh.MaCongTrinh','=','ctcongtrinh.MaCT')->join('image','congtrinh.MaCongTrinh','=','image.MaCT')
        ->where('ctcongtrinh.TenLoaiCongTrinh','=','Nhà Cấp 4')->paginate(8);
        $NhaPho= DB::table('congtrinh')->join('ctcongtrinh','congtrinh.MaCongTrinh','=','ctcongtrinh.MaCT')->join('image','congtrinh.MaCongTrinh','=','image.MaCT')
        ->where('ctcongtrinh.TenLoaiCongTrinh','=','Nhà Phố')->paginate(8);
        $TinTuc= DB::table('congtrinh')->join('ctcongtrinh','congtrinh.MaCongTrinh','=','ctcongtrinh.MaCT')->join('image','congtrinh.MaCongTrinh','=','image.MaCT')
        ->where('ctcongtrinh.TenLoaiCongTrinh','=','Tin Tức')->paginate(8);
        $CongTi = DB::table('congti')->get();
        $manager_CongTrinh= view('pages.home')->with('NhaCap4',$NhaCap4)->with('NhaPho',$NhaPho)->with('TinTuc',$TinTuc)->with('CongTi',$CongTi);
        $manager_layout = view('layout')->with('CongTi',$CongTi);
        return view('layout')->with('pages.home', $manager_CongTrinh)->with('layout',$manager_layout);
        
    }
    public function introduce(){
        $GioiThieu = DB::table('congti')->get();
        $manager_gioithieu = view('pages.gioithieu')->with('introduce',$GioiThieu);
        return view('layout')->with('pages.gioithieu',$manager_gioithieu);
    }
    public function level_4_house(){
        return view('pages.Nha-cap-4');
    }
}
