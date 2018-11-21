@extends('Home.Indexpublic.public')
@section('main')
<!DOCTYPE html>

<html lang="cn" class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths pc " style="" data-blockbyte-bs-uid="68809"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>订单管理</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="HandheldFriendly" content="true">
    <meta name="MobileOptimized" content="320">
    <meta name="screen-orientation" content="portrait">
    <meta name="x5-orientation" content="portrait">
    <meta name="full-screen" content="no">
    <meta name="x5-fullscreen" content="true">
    <meta name="x5-page-mode" content="app">
    <meta name="msapplication-tap-highlight" content="no"> 
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="always" name="referrer">
    <link href="/Home/detail/vendor.css" rel="stylesheet">
    <link href="/Home/detail/header.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/Home/detail/common_pc.css">
    <link href="/Home/detail/index.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/Home/detail/order.css">
    <body class="account-page">
        <div class="user-bd" >
            @foreach($data as $row)
            <div class="user-content" style="margin-top: 50px;margin-left: 120px;" >
            <div class="order-item">
            <div class="order-item-hd">
                <div class="order-num" style="background: none;">订单号：
                    <span class="num">{{$row->orderid}}</span>
                </div>
                <div class="order-operate">
                    <span class="pay-btn">待发货</span>
                    <a href="" class="pay-btn">确认收货</a>
                </div>
            </div>
        <div class="order-address-invoice">
            <div class="order-address hover" style="height: 115px;">
            <dl>
                <dt><i class="i-edit" data-orderflow="10180826685320001" data-mobile="15012446028"></i></dt>
                <dd>
                    <ul data-province="44" data-city="4401" data-area="440104" data-street="440104005">
                        <li>收货人：<span>{{$row->linkname}}</span></li>
                        <li>
                            收货地址：<span>{{$row->address}}</span>
                        </li>
                        <li>联系电话：<span>{{$row->tel}}</span></li>
                    </ul>
                </dd>
            </dl>
            </div>
            <div class="order-invoice hover" style="height: 115px;">
                <dl>
                    <dt><i class="i-edit" data-orderflow="10180826685320001" data-invoicetype="2"></i></dt>
                        <dd>
                            <ul class="has-invoice">
                                <li>发票类型：
                                    <span class="invoice-type-name">
                                        电子发票
                                    </span>
                                </li>
                                <li class="invoice-head">发票抬头：<span>个人</span></li>
                                <li class="invoice-com-name hide">公司名称：<span></span></li>
                                    <li class="invoice-no hide">纳税人识别号：<span></span></li>
                                <li>发票内容：<span>商品明细</span></li>
                            </ul>
                        </dd>
                </dl>
            </div>
        </div>
        </div>
        
        <div class="order-item-bd">
            <ul class="goods-list-box order-list-box">
                <li class="list-head">
                    <ul class="clearfix">
                        <li class="tb-name"><span>商品</span></li>
                        <li class="tb-price">价格</li>
                        <li class="tb-number">数量</li>
                        <li class="tb-act">操作</li>
                    </ul>
                </li>

                <li class="list-body">
                @foreach($res as $key=>$value)
                    @if($value->oid == $row->id)   
                    <div class="main-goods">
                        <ul class="clearfix">
                            <li class="tb-name" data-item-id="2443064">
                                <a href="" target="_blank">
                                    <img class="goods-img" src="/Uploads/Goods/{{$value->pic}}">
                                </a>
                                <span class="name-info">
                                    <span>
                                        {{$value->gname}}
                                    </span>
                                </span>
                            </li>
                            <li class="tb-price price">
                                <div>
                                    <p>¥{{$value->price}}</p>
                                </div>
                            </li>
                            <li class="tb-number">{{$value->gnum}}</li>
                            <li class="tb-act"><a href="javscript:;" class="btn-review hide"></a></li>
                        </ul>
                    </div>
                    @endif
                @endforeach
                </li>
            </ul>
            <div class="tb-ft">
                <ul>
                    <li class="total"><span>商品总金额：</span>¥{{$row->total}}</li>
                    <li class="cunpon"><span>优惠金额：</span>- ¥0</li>
                    <li class="shipping"><span>运费：</span>+ ¥0</li>
                    <li class="amount"><span>订单金额：</span><em>¥{{$row->total}}</em></li>
                </ul>
            </div>
        </div>
    </div>
    @endforeach
    <!-- 
    <div class="has-no-order">
        <div class="order-item-hd"></div>
            <div class="order-item-bd">
                <div class="no-order-show">
                    <i class="i-no-order"></i>
                    <p>您还没有任何订单</p>
                </div>
            </div>
    </div> -->
    
</div>
</div>
</div>
</div>
    
</body>
</html>
@endsection
@section('title','订单')