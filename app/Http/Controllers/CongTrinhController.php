<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\webxaydungnha;
Session_start();

class CongTrinhController extends Controller
{
    public function level_4_house(){
        $CongTrinh= DB::table('congtrinh')->join('ctcongtrinh','congtrinh.MaCongTrinh','=','ctcongtrinh.MaCT')->join('image','congtrinh.MaCongTrinh','=','image.MaCT')
        ->where('ctcongtrinh.TenLoaiCongTrinh','=','Nhà Cấp 4')->Paginate(15);
        $manager_CongTrinh= view('pages.Nha_cap_4')->with('CongTrinh',$CongTrinh);

        return view('layout')->with('pages.Nha_cap_4', $manager_CongTrinh);
    }

    public function NhaPho(){
        $CongTrinh= DB::table('congtrinh')->join('ctcongtrinh','congtrinh.MaCongTrinh','=','ctcongtrinh.MaCT')->join('image','congtrinh.MaCongTrinh','=','image.MaCT')
        ->where('ctcongtrinh.TenLoaiCongTrinh','=','Nhà Phố')->paginate(15);
        $manager_CongTrinh= view('pages.Nha_Pho')->with('CongTrinh',$CongTrinh);

        return view('layout')->with('pages.Nha_Pho', $manager_CongTrinh);
    }
}
