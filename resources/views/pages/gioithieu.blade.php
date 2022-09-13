@extends('layout')
@section('content')
<section id="giothieu" class="portfolio about section-padding">
    <div class="conteiner">
        <div class="row">
            <div class="col-2 col-lg-2 col-md-2"></div>
            <div class="col-8 col-lg-8 col-md-8">
                <h3 class="text-left">Giới Thiệu</h3>
                <h2 class="text-left">CHÀO MỪNG BẠN ĐẾN VỚI XÂY NHÀ ĐẸP</h2>
                <br>
                <div>
                    <i class="fa fa-check-square fa-2x text-bg-primary border border-primary"></i>
                    
                    <h4 class='text-left text-dark'>
                    <br>
                        {{$introduce[0]->GioiThieu}}
                    </h4>
                </div>

            </div>
        </div>
    </div>

</section>
@endsection