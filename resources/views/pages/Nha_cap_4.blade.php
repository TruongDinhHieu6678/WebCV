@extends('layout')
@section('content')
<section id="NhaCap4" class="portfolio about section-padding">
    
    <div class="container-a1">
		<ul class="caption-style-1">
            <div class="container" >
                <div class="row">
                <h3 class="text-dark text-center ">Nhà Cấp 4</h3>
                @foreach($CongTrinh as $Listcongtrinh)
                    <div class="col-12 col-md-12 col-lg-4 " style="padding:10px;">
			            <li>
				            <img src="{{('public/frontend/images/nha2.jpg')}}" alt="" class="img-fluid">
				            <div class="caption">
					            <div class="blur "></div>
					                <div class="caption-text">
						                <h1><a class="dropdown-item text-wrap" href="#">{{$Listcongtrinh->TenCongTrinh}}</a></h1>
						                <p>{{$Listcongtrinh->TenLoaiCongTrinh}}</p>
					                </div>
				            </div>
			            </li>
                    </div>
                @endforeach
                <nav aria-label="Page navigation">
                    <div class="row">
                        <div class="col-9">
                        </div>
                        <div class="col-3">
                    
                        {{ $CongTrinh->links() }}
                        </div>
                    </div>
                    
                </nav>
                </div>
            </div>
        </ul>
    </div>

</section>
@endsection
