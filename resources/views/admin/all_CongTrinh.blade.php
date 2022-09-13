@extends('admin_layout')
@section('admin_content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê sản phẩm  
    </div>
    <?php
		                            $message = Session::get('message');
		                            if($message)
		                            {
			                            echo '<span class="text-alert">',$message.'</span>';
                                    
			                            Session::put('message',null);
		                            }
	                            ?>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Tên Công Trình</th>
            <th>Loại Công Trình</th>
            <th>Quy Mô</th>
            <th>Diện Tích</th>
            <th>Năm Xây Dựng</th>
            <th>Địa Điểm</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_CongTrinh as $values => $CongTrinh)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$CongTrinh->TenCongTrinh}}</td>
            <td><span class="text-ellipsis">{{$CongTrinh->TenLoaiCongTrinh}}</span></td>
            <td><span class="text-ellipsis">{{$CongTrinh->QuyMo}}</span></td>
            <td><span class="text-ellipsis">{{$CongTrinh->DienTich}}</span></td>
            <td><span class="text-ellipsis">{{$CongTrinh->NamXayDung}}</span></td>
            <td><span class="text-ellipsis">{{$CongTrinh->DiaDiem}}</span></td>
            <td>
              <a href="{{URL::to('/edit-CongTrinh/'.$CongTrinh->MaCongTrinh)}}" class="active styling-edit" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a href="{{URL::to('/delete-CongTrinh/'.$CongTrinh->MaCongTrinh)}}" class="active styling-edit" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr> 
          @endforeach
        </tbody>
      </table>
      
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
          <nav aria-label="Page navigation">
                    <div class="row">
                        <div class="col-9">
                        </div>
                        <div class="col-3">
                    
                        {{ $all_CongTrinh->links() }}
                        </div>
                    </div>
                    
                </nav>
          </ul>
        </div>
      </div>
    </footer>
  </div>
  
</div>
@endsection
        