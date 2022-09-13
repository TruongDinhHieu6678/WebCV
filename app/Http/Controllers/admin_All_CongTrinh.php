<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\webxaydungnha;
Session_start();

class admin_All_CongTRinh extends Controller
{
    public function all_CongTrinh()
    {
        $All_CongTrinh = DB::table('congtrinh')->join('ctcongtrinh','congtrinh.MaCongTrinh','=','ctcongtrinh.MaCT')->Paginate(6);
        $manager_CongTrinh = view('admin.all_CongTrinh')->with('all_CongTrinh',$All_CongTrinh);
        return view('admin_layout')->with('admin.all_CongTrinh',$manager_CongTrinh);
    }
    public function edit_CongTrinh($MaCongTrinh)
    {
        $edit_CongTrinh = DB::table('congtrinh')->join('ctcongtrinh', 'ctcongtrinh.MaCT','=','congtrinh.MaCongTrinh')
        ->where('MaCongTrinh',$MaCongTrinh)->get();
        $type_CongTrinh = DB::table('ctcongtrinh')->select('TenLoaiCongTrinh')->distinct()->get();
        $manager_CongTrinh = view('admin.edit_CongTrinh')->with('edit_CongTrinh',$edit_CongTrinh)->with('type_CongTrinh',$type_CongTrinh);
        return view('admin_layout')->with('admin.edit_CongTrinh',$manager_CongTrinh);
    }
    public function update_CongTrinh($MaCongTrinh, Request $request)
    {
        $data1= array();
        $data2=array();
        $data1['TenCongTrinh']= $request->TenCongTrinh;
        $data2['NamXayDung']= $request->NamXayDung;
        $data2['QuyMo']=$request->QuyMo;
        $data2['DienTich']=$request->DienTich;
        $data2['DiaDiem']=$request->DiaDiem;
        $data2['TenLoaiCongTrinh']=$request->LoaiCongTrinh;
        $data2['ChiTietCT']= $request->MoTa;
        DB::table('congtrinh')->where('MaCongTrinh',$MaCongTrinh)->update($data1);
        DB::table('ctcongtrinh')->where('MaCT',$MaCongTrinh)->update($data2);
        Session::put('message', 'Cập nhật sản phẩm thành công:');
        return  Redirect::to('all-CongTrinh');
    }
    public function delete_CongTrinh($MaCongTrinh)
    {
        DB::table('ctcongtrinh')->where('MaCT', $MaCongTrinh)->delete();
        DB::table('image')->where('MaCT',$MaCongTrinh)->delete();
        DB::table('congtrinh')->where('MaCongTrinh', $MaCongTrinh)->delete();
        Session::put('message', 'Delete sản phẩm thành công:');
        return  Redirect::to('all-CongTrinh');
    }

}
