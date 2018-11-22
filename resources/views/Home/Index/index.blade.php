@extends('Home.Indexpublic.public')
@section('main')
 <script type="text/javascript" src="/Home/js/jquery-1.8.3.min.js"></script>
<div class="offcanvas-wrapper">
    <!-- Start Main Slider -->
    <div class="hero-slider home-1-hero">
        <div class="owl-carousel large-controls dots-inside" data-owl-carousel='{"nav": true, "dots": true, "loop": true, "autoplay": true, "autoplayTimeou": 7000}'>
            <!-- Start Slide #1 -->
            @if($Slider != '')
            @foreach($Slider as $value)
            <div class="item">
                <div class="container padding-top-3x">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center hidden-md-down">
                            <div class="from-bottom">
                                <!-- <img class="d-inline-block w-150 mb-4" src="/Home/images/hero-slider/logo02.png" alt="Puma"> -->
                                <div class="h2 text-body text-normal mb-2 pt-1">{{$value->name}}</div>
                            </div>
                            <a class="btn btn-primary scale-up delay-1" href="{{$value->url}}" target="_blank">现在去购物</a>
                        </div>
                        <div class="col-md-6 padding-bottom-2x mb-3">
                            <img class="d-block mx-auto" src="/Uploads/Slider/{{$value->pic}}" alt="Puma Backpack">
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
            <!-- End Slide #1 -->
        </div>
    </div>
    <!-- End Main Slider -->
    <!-- Start Top Categories -->
    <section class="container padding-top-3x padding-bottom-3x">
        <h3 class="text-center mb-30">特色产品</h3>
        <div class="owl-carousel"
             data-owl-carousel='{"nav": false, "dots": false, "margin": 30, "responsive": {"0":{"items":1},"576":{"items":2},"768":{"items":3},"991":{"items":4},"1200":{"items":4}} }'>
            <!-- Start Product #1 -->
            @foreach($data as $row)
            <div class="grid-item">
                <div class="product-card">
                    <a class="product-thumb" href="/shopsingle/{{$row->id}}">
                        <img src="/Uploads/Goods/{{$row->pic}}" alt="Product" style="height:160px;">
                    </a>
                    <h3 class="product-title"><a href="shop-single-3.html">{{$row->name}}</a></h3>
                    <h4 class="product-price">{{$row->price}}</h4>
                    <div class="product-buttons">   
                        <div class="product-buttons">
                            <a  class="btn btn-outline-secondary btn-sm " data-toggle="tooltip" title="我喜欢" href="/homewish/{{$row->id}}" >
                                <i class="icon-heart" ></i></a>
                            <form  method="post" action="/homecart" style="display:inline-block;">
                            <button class="btn btn-outline-primary btn-sm " data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!" style="margin-top: 8px">添加到购物车</button>
                            
                            <input type="hidden" name="id" value="{{$row->id}}">
                            {{csrf_field()}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- End Top Categories -->
    <!-- Start Featured Products -->
    <section class="container padding-top-3x padding-bottom-3x">
        <h3 class="text-center mb-30">广告列表</h3>
        <div class="owl-carousel" data-owl-carousel='{"nav": false, "dots": false, "margin": 30, "loop": true, "autoplay": true, "autoplayTimeout": 2000, "responsive": {"0":{"items":1},"576":{"items":2},"768":{"items":3},"991":{"items":4},"1200":{"items":4}} }'>
            <!-- Start Product #1 -->
            @foreach($advert as $row)
            <div class="grid-item" class="d-block w-110 opacity-75 m-auto">
                <div class="product-card">
                    <a class="product-thumb" href="{{$row->url}}" target="view_window">
                        <img src="/Uploads/Advert_img/{{$row->pic}}" alt="Product" style="height:126px">
                    </a>
                    <h3 class="product-title"><a href="{{$row->url}}" target="_blank">{{$row->name}}</a></h3>
                    <ladel size="5">广告语:</ladel>
                    <textarea cols="30" rows="15" style="height:50px;border:0px;font-style:oblique" disabled>{{$row->title}}</textarea>
                </div>
            </div>
            @endforeach
            <!-- End Product #6 -->
        </div>
    </section>
    <!-- End Featured Products -->
    <!-- Start Popular Brands -->
    <section class="bg-faded padding-top-3x padding-bottom-3x">
        <div class="container">
            <h3 class="text-center mb-30">Popular Brands</h3>
            <div class="owl-carousel" data-owl-carousel='{ "nav": false, "dots": false, "loop": true, "autoplay": false, "autoplayTimeout": 4000, "responsive": {"0":{"items":2}, "470":{"items":3},"630":{"items":4},"991":{"items":5},"1200":{"items":6}} }'>
                <img class="d-block w-110 opacity-75 m-auto" src="/Home/images/brands/01.png" alt="Brands">
                <img class="d-block w-110 opacity-75 m-auto" src="/Home/images/brands/02.png" alt="Brands">
                <img class="d-block w-110 opacity-75 m-auto" src="/Home/images/brands/03.png" alt="Brands">
                <img class="d-block w-110 opacity-75 m-auto" src="/Home/images/brands/04.png" alt="Brands">
                <img class="d-block w-110 opacity-75 m-auto" src="/Home/images/brands/05.png" alt="Brands">
                <img class="d-block w-110 opacity-75 m-auto" src="/Home/images/brands/06.png" alt="Brands">
                <img class="d-block w-110 opacity-75 m-auto" src="/Home/images/brands/07.png" alt="Brands">

            </div>
        </div>
    </section>
    <!-- End Popular Brands -->
    <!-- Start Services -->
    <section class="container padding-top-3x padding-bottom-3x">
        <div class="row">
            <div class="col-md-3 col-sm-6 text-center home-cat">
                <img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="/Home/images/services/01.png" alt="Shipping">
                <h6>Free Shipping</h6>
                <p class="text-muted margin-bottom-none">On order over $200 ...</p>
            </div>
            <div class="col-md-3 col-sm-6 text-center home-cat">
                <img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="/Home/images/services/02.png" alt="Money Back">
                <h6>Money Back</h6>
                <p class="text-muted margin-bottom-none">Moneyback guarantee ...</p>
            </div>
            <div class="col-md-3 col-sm-6 text-center home-cat">
                <img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="/Home/images/services/03.png" alt="Support">
                <h6>24/7 Support</h6>
                <p class="text-muted margin-bottom-none">Online consultations ...</p>
            </div>
            <div class="col-md-3 col-sm-6 text-center home-cat">
                <img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="/Home/images/services/04.png" alt="Payment">
                <h6>Secure Payment</h6>
                <p class="text-muted margin-bottom-none">Safe Shopping Guarantee ...</p>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        // function fun($dd){
        //     $.get("/homewishdel",{id:id},function(dd){
        //         alert(dd);
        //     });
        // }
    </script>
    <!-- End Services -->
</div>
</div>
<script>
    // function fun(dd){
    //     $.get("/homewishdel",{dd:dd},function(tes){
    //         alert(tes);
    //     });
    // }
</script>
@endsection
@section('title','首页')
