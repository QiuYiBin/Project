@extends('Home.Indexpublic.public')
@section('main')
<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="offcanvas-wrapper">
    <!-- Start Page Title -->
    <div class="page-title">
        <div class="container">
            <div class="column">
                <h1>公告</h1>
            </div>
            <div class="column">
                <ul class="breadcrumbs">
                    <li><a href="/">Home</a>
                    </li>
                    <li class="separator">&nbsp;</li>
                    <li>公告</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title -->
    <!-- Start Content -->
     <div class="col-lg-8 col-md-8 offset-lg-2 offset-md-2 padding-bottom-3x">
     	<div class="pagination">
     	{{$article->render()}}
		</div>
        <h6 class="text-muted text-normal text-uppercase">公告内容</h6>
        <hr class="margin-bottom-1x">
        <div class="accordion" id="accordion1" role="tablist">
        	 @foreach($article as $row)
        	 
            <div class="card">
            <span style="float:left">发布时间:{{$row->created_at}}</span>
                <div class="card-header" role="tab">
                    <h6><a href="#{{$row->id}}" data-toggle="collapse" data-parent="#accordion1"><center>公告:{{$row->title}}</center></a></h6>
                </div>
                
                <div class="collapse" id="{{$row->id}}" role="tabpanel">
                    <div class="card-body">{!!$row->descr!!}</div>
              </div>
            </div>
          		 @endforeach
          </div>
        </div>
       </div>

        

       
    
    <!-- End Content -->
<!-- Start Back To Top -->
<a class="scroll-to-top-btn" href="#">
    <i class="icon-arrow-up"></i>
</a>
<!-- End Back To Top -->
<div class="site-backdrop"></div>
<!-- Modernizr JS -->
<script src="/Homejs/modernizr.min.js"></script>
<!-- JQuery JS -->
<script src="/Homejs/jquery.min.js"></script>
<!-- Popper JS -->
<script src="/Homejs/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="/Homejs/bootstrap.min.js"></script>
<!-- CountDown JS -->
<script src="/Homejs/count.min.js"></script>
<!-- Gmap JS -->
<script src="/Homejs/gmap.min.js"></script>
<!-- ImageLoader JS -->
<script src="/Homejs/imageloader.min.js"></script>
<!-- Isotope JS -->
<script src="/Homejs/isotope.min.js"></script>
<!-- NouiSlider JS -->
<script src="/Homejs/nouislider.min.js"></script>
<!-- OwlCarousel JS -->
<script src="/Homejs/owl.carousel.min.js"></script>
<!-- PhotoSwipe UI JS -->
<script src="/Homejs/photoswipe-ui-default.min.js"></script>
<!-- PhotoSwipe JS -->
<script src="/Homejs/photoswipe.min.js"></script>
<!-- Velocity JS -->
<script src="/Homejs/velocity.min.js"></script>
<!-- Main JS -->
<script src="/Homejs/script.js"></script><script src="/Homejs/custom.js"></script>
@endsection
@section('title','公告')
