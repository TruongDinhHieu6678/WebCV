@extends('admin_layout')
@section('admin_content') 

<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập Nhật Sản Phẩm
                        </header> 
                        <div class="panel-body">
                            <div class="position-center">
                                <?php
		                            $message = Session::get('message');
		                            if($message)
		                            {
			                            echo '<span class="text-alert">',$message.'</span>';
                                    
			                            Session::put('message',null);
		                            }
	                            ?> 
                            </div>
                            @foreach($edit_CongTrinh as $key => $CongTrinh)
                            <div class="position-center">
                                
                                <form role="form" action="{{URL::to('/update-CongTrinh/'.$CongTrinh->MaCongTrinh)}}" method="post">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Công Trình</label>
                                    <input type="Text" value="{{$CongTrinh->TenCongTrinh}}" class="form-control" name="TenCongTrinh" placeholder="Tên Sản Phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Năm Xây Dựng </label>
                                    <input type="Text" value="{{$CongTrinh->NamXayDung}}" class="form-control" name="NamXayDung" placeholder="Giá sản Phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Quy Mô </label>
                                    <input type="Text" value="{{$CongTrinh->QuyMo}}" class="form-control" name="QuyMo" placeholder="Ngày Nhập">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Diện Tích </label>
                                    <input type="Text" class="form-control" value="{{$CongTrinh->DienTich}}" name="DienTich" placeholder="Số lượng">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Địa Điểm</label>
                                    <input type="Text" class="form-control" value="{{$CongTrinh->DiaDiem}}" name="DiaDiem" placeholder="Số lượng">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Loại Công Trình </label>
                                    <select name="LoaiCongTrinh" class="form-control input-sm m-bot15">
                                        @foreach($type_CongTrinh as $key_lsp => $values_lsp)
                                            <option value="{{$values_lsp->TenLoaiCongTrinh}}">{{$values_lsp->TenLoaiCongTrinh}}</option>
                                        @endforeach
                                        
                                    </select>
                                </div> 
                                
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả Công Trình</label>
                                    <textarea type="text" value="{{$CongTrinh->ChiTietCT}}" style="resize: none" rows="3" class="form-control" name="MoTa" placeholder="Mô tả sản phẩm">{{$CongTrinh->ChiTietCT}}</textarea>
                                </div>
                                <div class="form-group">
                                <button type="submit" name="update_CongTrinh" class="btn btn-info">Cập Nhật Công Trình</button>
                                
                            </form>
                            </div>
                            @endforeach
                        </div>
                    </section>

            </div>
            @endsection
        