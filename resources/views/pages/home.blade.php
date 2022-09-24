@extends('layout')
@section('content')
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{('public/frontend/images/nha2.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption">
      <h5>Ngôi Nhà Mơ Ước Của Bạn</h5>
        <p>Some representative placeholder content for the second slide.</p>
        <!--<p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>-->
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{('public/frontend/images/nha3.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h5>Ngôi Nhà Mơ Ước Của Bạn</h5>
        <p>Some representative placeholder content for the second slide.</p>
        <!--<p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>-->
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{('public/frontend/images/anh-nha-dep.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption">
      <h5>Ngôi Nhà Mơ Ước Của Bạn</h5>
        <p>Some representative placeholder content for the second slide.</p>
        <!--<p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>-->
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<section id="portfolio" class="portfolio about section-padding">
<div class="card text-white text-center pb-2" style="background-color: rgba(223,223,223)">
          <div class="card-body">
  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <div class="section-header text-center pb-5">
          <p class="text-dark">Những sản phẩm, dịch vụ Xây Nhà Đẹp cung cấp cho bạn</p>
          <h2 class="text-dark">
            Bạn Cần Tìm Gì?
          </h2>
          <div class="">
          <button class="btn text-dark bg-warning">Xây Nhà Trọn Gói</button>
          <button class="btn btn-info text-dark">Sửa Chửa Cải Tạo</button>
          </div>

        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-6 col-md-6 col-lg-3">
        <div class="card text-center bg-white pb-2">
          <div class="card-body text-dark">
            <div class="img-area mb-4">
              <img src="{{('public/frontend/images/iconCountryHouse.jpg')}}" alt="" class="img-fluid">
            </div>
            <a href="#" class="text-dark ">Đơn Xây Trọn Gói</a>
          </div>
        </div>
      </div>
      
      <div class="col-6 col-md-6 col-lg-3">
        <div class="card text-center bg-white pb-2">
          <div class="card-body text-dark">
            <div class="img-area mb-4">
            <img src="{{('public/frontend/images/iconCountryHouse.jpg')}}" alt="" class="img-fluid">
            </div>
            
            <a href="{{URL::to('/NhaPho')}}" class="text-dark ">Công Trình Nhà Phố</a>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-6 col-lg-3">
        <div class="card text-center bg-white pb-2">
          <div class="card-body text-dark">
            <div class="img-area mb-4">
            <img src="{{('public/frontend/images/iconCountryHouse.jpg')}}" alt="" class="img-fluid">
            </div>
            
            <a href="{{URL::to('/Nha-Cap-4')}}" class="text-dark ">Công Trình Nhà Cấp 4</a>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-6 col-lg-3">
        <div class="card text-center bg-white pb-2">
          <div class="card-body text-dark">
            <div class="img-area mb-4">
            <img src="{{('public/frontend/images/iconCountryHouse.jpg')}}" alt="" class="img-fluid">
            </div>
            
            <a href="#" class="text-dark ">Công Trình Nhà Phố</a>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  
</section>
<section id="portfolio" class="portfolio about section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-header text-center pb-5">
          <p class="text-dark ">Những mẫu nhà phố đẹp của XAYNHADEP</p>
          <h2 class="text-dark">
            XÂY DỰNG NHÀ PHỐ
          </h2>
        </div>
      </div>
    </div>
    <div class="container-a1">
		<ul class="caption-style-1">
            <div class="container" >
                <div class="row">
                <h3 class="text-dark text-center">Nhà Cấp 4</h3>
                @foreach($NhaCap4 as $Listcongtrinh)
                  <div class="col-6 col-md-6 col-lg-3" style="padding:10px;">
			            <li>
				            <img src="{{('public/frontend/images/nha2.jpg')}}" alt="" class="img-fluid" >
				            <div class="caption">
					            <div class="blur"></div>
					                <div class="caption-text">
						                <h1><a class="dropdown-item text-wrap" href="#">{{$Listcongtrinh->TenCongTrinh}}</a></h1>
						                <p>{{$Listcongtrinh->TenLoaiCongTrinh}}</p>
					                </div>
				            </div>
			            </li>
                    </div>
                @endforeach
                <nav aria-label="Page navigation">
                    
                </nav>
                </div>
            </div>
        </ul>
    </div>
  </div>
</div>
</div>
</section>
</section>
<section id="portfolio" class="portfolio about section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-header text-center pb-5">
          <p class="text-dark ">Những mẫu nhà phố đẹp của XAYNHADEP</p>
          <h2 class="text-dark ">
            XÂY DỰNG NHÀ Cấp 4
          </h2>
        </div>
      </div>
    </div>
    <div class="container-a1">
		<ul class="caption-style-1">
            <div class="container" >
                <div class="row">
                <h3 class="text-dark text-center">Nhà Phố</h3>
                @foreach($NhaPho as $Listcongtrinh)
                  <div class="col-6 col-md-6 col-lg-3" style="padding:10px;">
			            <li>
				            <img src="{{('public/frontend/images/nha2.jpg')}}" alt="" class="img-fluid" >
				            <div class="caption">
					            <div class="blur"></div>
					                <div class="caption-text">
						                <h1><a class="dropdown-item text-wrap" href="#">{{$Listcongtrinh->TenCongTrinh}}</a></h1>
						                <p>{{$Listcongtrinh->TenLoaiCongTrinh}}</p>
					                </div>
				            </div>
			            </li>
                    </div>
                @endforeach
                <nav aria-label="Page navigation">
                    
                </nav>
                </div>
            </div>
        </ul>
    </div>
      
      
      
  </div>
</div>
</div>
</section>
</section>
<section id="portfolio" class="portfolio about section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-header text-center pb-5">
          <p class="text-dark">Những mẫu nhà phố đẹp của XAYNHADEP</p>
          <h2 class="text-dark">
            Tin Tức
          </h2>
        </div>
      </div>
    </div>
    <div class="container-a1">
		<ul class="caption-style-1">
            <div class="container" >
                <div class="row">
                <h3 class="text-dark text-center">Tin Tức</h3>
                @foreach($TinTuc as $Listcongtrinh)
                  <div class="col-6 col-md-6 col-lg-3" style="padding:10px;">
			            <li>
				            <img src="{{('public/frontend/images/nha2.jpg')}}" alt="" class="img-fluid" >
				            <div class="caption">
					            <div class="blur"></div>
					                <div class="caption-text">
						                <h1><a class="dropdown-item text-wrap" href="#">{{$Listcongtrinh->TenCongTrinh}}</a></h1>
						                <p>{{$Listcongtrinh->TenLoaiCongTrinh}}</p>
					                </div>
				            </div>
			            </li>
                    </div>
                @endforeach
                <nav aria-label="Page navigation">
                    
                </nav>
                </div>
            </div>
        </ul>
    </div>
    </div>
  </div>
</div>
</div>
</section>
@endsection