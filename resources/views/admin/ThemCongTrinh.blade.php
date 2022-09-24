@extends('admin_layout')
@section('admin_content')

<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm Sản Phẩm
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
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-CongTrinh')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Công Trình </label>
                                    <input type="Text" class="form-control" name="TenCongTrinh" placeholder="Tên Sản Phẩm">
                                </div>
                                <div class="mb-3">
                                    <label for="formFileMultiple" class="form-label">Thêm ảnh</label>
                                    <input class="form-control" type="file" name="image[]" id="formFileMultiple" multiple>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Năm Xây Dựng </label>
                                    <input type="Text" class="form-control" name="NamXayDung" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Địa Điểm </label>
                                    <input type="Text" class="form-control" name="DiaDiem" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Quy Mô </label>
                                    <input type="Text" class="form-control" name="QuyMo" placeholder="Ngày Nhập">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Diện Tích</label>
                                    <input type="Text" class="form-control" name="DienTich" placeholder="Số lượng">
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
                                    <label for="exampleInputPassword1">Mô tả</label>
                                    <textarea type="text" style="resize: none" rows="3" class="form-control" name="MoTa" placeholder="Mô tả sản phẩm"></textarea>
                                </div>
                                <div class="form-group">
                                <button type="submit" name="add_CongTrinh" class="btn btn-info">Thểm sản phẩm</button>
                                
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection
        