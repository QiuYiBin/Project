@extends('Home.Indexpublic.public')
@section('main')
<!DOCTYPE html>
	<html lang="cn" class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths pc " style="" data-blockbyte-bs-uid="23468">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="/Home/Clearing/style1503546983737.css">
	<title>一加商城-订单填写页面</title>
	<meta name="keywords" content="一加手机，1+手机，一加手机官网商城,一加商城,1+手机商城,1+商城,一加智能手机商城">
	<meta name="description" content="一加手机官网商城是一加科技旗下面向全国服务的电子商务平台官网，专业提供官方正品一加手机及1+手机配件，品质保证，欢迎在线购买！">
	<!--[if lte IE 9]>
	<meta http-equiv="refresh" content="0;url=https://www.oneplus.com/cn/upgrade/browser">
	<script>location.href="https://www.oneplus.com/cn/upgrade/browser";</script>
	<![endif]-->

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
	<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />-->
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta content="always" name="referrer">
	<link href="/Home/Clearing/vendor.css" rel="stylesheet">
	<link href="/Home/Clearing/index.css" rel="stylesheet">
	<link rel="stylesheet" href="/Home/Clearing/header.css">
	<!-- <link rel="stylesheet" type="text/css" href="./View/orders/orders/common_pc.css"> -->
	 <link rel="stylesheet" type="text/css" href="/Home/Clearing/order.css">
	<link charset="utf-8" rel="stylesheet" href="/Home/Clearing/nc.css" disabled=""><style>@charset "utf-8";
@font-face{font-family:'nc_iconfont';src:url("//at.alicdn.com/t/font_1465353706_4784257.eot");src:url("//at.alicdn.com/t/font_1465353706_4784257.eot?#iefix") format('embedded-opentype'),url("//at.alicdn.com/t/font_1465353706_4784257.woff") format('woff'),url("//at.alicdn.com/t/font_1465353706_4784257.ttf") format('truetype'),url("//at.alicdn.com/t/font_1465353706_4784257.svg#iconfont") format('svg')}@font-face{font-family:'ncpc_iconfont';src:url("//at.alicdn.com/t/font_384029_rhzpmteb25oecdi.eot");src:url("//at.alicdn.com/t/font_384029_rhzpmteb25oecdi.eot?#iefix") format('embedded-opentype'),url("//at.alicdn.com/t/font_384029_rhzpmteb25oecdi.woff") format('woff'),url("//at.alicdn.com/t/font_384029_rhzpmteb25oecdi.ttf") format('truetype'),url("//at.alicdn.com/t/font_384029_rhzpmteb25oecdi.svg#ncpc_iconfont") format('svg')}.nc-container div#nc-loading-circle{background:transparent;width:20px;height:20px;display:inline-block;position:relative;vertical-align:middle}.nc-container div#nc-loading-circle .sk-circle{background:transparent;width:100%;height:100%;position:absolute;left:0;top:0}.nc-container #nc-loading-circle .sk-circle:before{content:'';display:block;margin:0 auto;width:15%;height:15%;background-color:#818181;border-radius:100%;-webkit-animation:sk-circleFadeDelay 1.2s infinite ease-in-out both;animation:sk-circleFadeDelay 1.2s infinite ease-in-out both}.nc-container #nc-loading-circle .sk-circle2{-webkit-transform:rotate(30deg);-ms-transform:rotate(30deg);transform:rotate(30deg)}.nc-container #nc-loading-circle .sk-circle3{-webkit-transform:rotate(60deg);-ms-transform:rotate(60deg);transform:rotate(60deg)}.nc-container #nc-loading-circle .sk-circle4{-webkit-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg)}.nc-container #nc-loading-circle .sk-circle5{-webkit-transform:rotate(120deg);-ms-transform:rotate(120deg);transform:rotate(120deg)}.nc-container #nc-loading-circle .sk-circle6{-webkit-transform:rotate(150deg);-ms-transform:rotate(150deg);transform:rotate(150deg)}.nc-container #nc-loading-circle .sk-circle7{-webkit-transform:rotate(180deg);-ms-transform:rotate(180deg);transform:rotate(180deg)}.nc-container #nc-loading-circle .sk-circle8{-webkit-transform:rotate(210deg);-ms-transform:rotate(210deg);transform:rotate(210deg)}.nc-container #nc-loading-circle .sk-circle9{-webkit-transform:rotate(240deg);-ms-transform:rotate(240deg);transform:rotate(240deg)}.nc-container #nc-loading-circle .sk-circle10{-webkit-transform:rotate(270deg);-ms-transform:rotate(270deg);transform:rotate(270deg)}.nc-container #nc-loading-circle .sk-circle11{-webkit-transform:rotate(300deg);-ms-transform:rotate(300deg);transform:rotate(300deg)}.nc-container #nc-loading-circle .sk-circle12{-webkit-transform:rotate(330deg);-ms-transform:rotate(330deg);transform:rotate(330deg)}.nc-container #nc-loading-circle .sk-circle2:before{-webkit-animation-delay:-1.1s;animation-delay:-1.1s}.nc-container #nc-loading-circle .sk-circle3:before{-webkit-animation-delay:-1s;animation-delay:-1s}.nc-container #nc-loading-circle .sk-circle4:before{-webkit-animation-delay:-.9s;animation-delay:-.9s}.nc-container #nc-loading-circle .sk-circle5:before{-webkit-animation-delay:-.8s;animation-delay:-.8s}.nc-container #nc-loading-circle .sk-circle6:before{-webkit-animation-delay:-.7s;animation-delay:-.7s}.nc-container #nc-loading-circle .sk-circle7:before{-webkit-animation-delay:-.6s;animation-delay:-.6s}.nc-container #nc-loading-circle .sk-circle8:before{-webkit-animation-delay:-.5s;animation-delay:-.5s}.nc-container #nc-loading-circle .sk-circle9:before{-webkit-animation-delay:-.4s;animation-delay:-.4s}.nc-container #nc-loading-circle .sk-circle10:before{-webkit-animation-delay:-.3s;animation-delay:-.3s}.nc-container #nc-loading-circle .sk-circle11:before{-webkit-animation-delay:-.2s;animation-delay:-.2s}.nc-container #nc-loading-circle .sk-circle12:before{-webkit-animation-delay:-.1s;animation-delay:-.1s}@-webkit-keyframes sk-circleFadeDelay{0%,39%,100%{opacity:0}40%{opacity:1}}@-webkit-keyframes sk-circleFadeDelay{0%,39%,100%{opacity:0}40%{opacity:1}}@keyframes sk-circleFadeDelay{0%,39%,100%{opacity:0}40%{opacity:1}}.nc-container .scale_text2 #nc-loading-circle .sk-circle:before{background-color:#fff}.nc_iconfont{font-family:"nc_iconfont";color:#ff3f08;font-size:16px;font-style:normal}.ncpc_iconfont{font-family:"ncpc_iconfont";color:#ff3f08;font-size:16px;font-style:normal}.captcha-error .icon_ban{float:left;font-size:16px;padding-right:5px;line-height:14px}.clickCaptcha_text .btn_refresh{font-style:normal;cursor:pointer;background:#fff;color:#737383}.imgCaptcha .btn_refresh{font-size:20px;cursor:pointer;background:#fff;color:#737383}.nc_voice{display:none;position:relative;margin-top:-34px;z-index:99;width:auto;height:34px;background:#fff}.omeo-code-img,.omeo-code-audio{font-size:0;text-align:left}.omeo-code-audiobox,.omeo-code-img a,.omeo-code-audio a,.omeo-code-state{display:inline-block;*display:inline;zoom:1;height:32px;vertical-align:top;font-size:12px}.omeo-code .omeo-code-refresh{background:transparent;width:32px;height:32px;font-size:20px;color:#888;text-align:center;text-decoration:none;padding-left:4px;line-height:32px}.omeo-code .omeo-switch{display:none;width:32px;height:32px;border-left:1px solid #e1e1e1;background-image:url("//g.alicdn.com/sd/ncpc/images/checkcode.png");background-repeat:no-repeat}.omeo-img-active .omeo-code-img{display:block}.omeo-img-active .omeo-code-audio{display:none}.omeo-code-img img{border:1px solid #cdcdcd;cursor:pointer}.omeo-code-img .omeo-switch{background-position:9px -41px}.omeo-audio-active .omeo-code-audio{display:block}.omeo-audio-active .omeo-code-img{display:none}.omeo-code-refresh{position:relative;left:95px}.omeo-code-audiobox{position:relative;height:30px;line-height:32px;border:1px solid #e1e1e1;text-align:center;overflow:hidden;left:100px;top:1px;width:45%;min-width:80px;background-color:#eee}.omeo-code-audiobox a{display:block;text-decoration:none;color:#06c}.omeo-code-audiobox-playing a{visibility:hidden}.omeo-code-audiobox span,.omeo-code-audiobox b{visibility:hidden;position:absolute;top:0;left:0;height:30px;font-weight:100;overflow:hidden}.omeo-code-audiobox-playing span,.omeo-code-audiobox-playing b{visibility:visible}.omeo-code-audiobox span{z-index:0;width:0;background:#186bca}.omeo-code-audiobox b{width:100%;z-index:1;text-align:left;text-indent:30px;color:#999;background:url("//g.alicdn.com/sd/ncpc/images/checkcode.png") no-repeat 14px -89px}.omeo-code-audio .omeo-switch{background-position:5px 10px}input[type=text]::-ms-clear{display:none}.omeo-box{position:relative;background-color:#fff}.omeo-code-echo{position:absolute;top:2px;left:2px}.omeo-code-echo input{padding:5px;height:18px;line-height:18px;border:1px solid #ddd;width:80px;outline:0}.omeo-code-state{height:30px;line-height:30px;text-indent:25px;white-space:nowrap;background-image:url("//g.alicdn.com/sd/ncpc/images/checkcode.png");background-repeat:no-repeat;background-position:100px 100px}.omeo-code-echo .omeo-code-state-error{width:auto;background-position:7px -193px}.omeo-code-echo .omeo-code-state-success{position:absolute;width:30px;background-position:7px -243px}.omeo-code-state{position:absolute;left:0;top:28px}.nc_voice_close{display:inline-block;position:relative;cursor:pointer;left:95px;top:0;border-left:#ddd 2px solid;padding:0 0 0 7px;background-color:#fff;font-size:20px;color:#888;line-height:32px}.nc_help{position:absolute;width:100%;height:100%;left:0;top:0;z-index:99999}.nc_help .mask{background-color:#000;opacity:.5;filter:alpha(opacity=50);width:100%;height:100%;top:0;left:0}.nc_btn_close{position:absolute;height:20px;left:500px;border-radius:20px;padding:10px 30px;background-color:#aaa;color:#fff;cursor:pointer;z-index:10}.nc_btn_close:hover{background-color:#afafaf}.nc_hand{position:absolute;width:68px;height:53px;background-image:url("//g.alicdn.com/sd/ncpc/images/hand.png");z-index:3}.nc_slide_bg{z-index:3;font-size:12px;text-align:center;color:#fff;line-height:34px}.nc_voicebtn{position:absolute;padding:0;right:-25px;font-size:23px;color:#888;cursor:pointer;line-height:34px}.nc_helpbtn{position:absolute;cursor:pointer;right:-95px;top:4px;font-size:12px;background-color:#ffb668;color:#fff;padding:4px;border-radius:2px;line-height:18px;display:none}.nc_helpbtn:before{width:0;height:0;content:"";position:absolute;left:-2px;top:6px;border-top:4px solid transparent;border-bottom:4px solid transparent;border-right:4px solid #ffb668}.nc-container .errloading{border:#faf1d5 1px solid;text-indent:3px;background-image:none;font-size:12px;width:290px;line-height:20px;padding:7px 5px 8px 5px;color:#ef9f06;}.nc-container .errloading a{color:#30a7fc}.nc_captcha_text .nc_err{float:left;text-indent:0}.button_move{transition:left .5s;-moz-transition:left .5s;-webkit-transition:left .5s;-o-transition:left .5s}.bg_move{transition:width .5s;-moz-transition:width .5s;-webkit-transition:width .5s;-o-transition:width .5s}.nc_slide_box{position:absolute}.nc_captcha_text{height:auto;line-height:20px;visibility:hidden;font-size:12px;color:#999;font-weight:normal}.nc-container .nc_captcha_img_text{width:auto;height:auto;line-height:20px;visibility:hidden;font-size:12px;color:#999;font-weight:normal;display:none;padding:0 0 10px 0;background-position:0 0;}.nc-container .nc_captcha_img_text span.nc-lang-cnt{line-height:inherit}.nc-container .imgCaptcha .nc_captcha_img_text{width:auto}.nc_captcha_img_text{height:auto;line-height:20px;visibility:hidden;font-size:12px;color:#999;font-weight:normal;display:none;padding:0 0 10px 3px;background-position:0 0}.nc-container .nc_wrapper{width:auto}.nc_scale{width:auto;height:34px;background:#e8e8e8;position:relative;margin:0;padding:0}.nc_scale.is_audio{margin-right:25px}.nc-container .nc_scale div{height:auto}.nc-container .nc_scale ul{list-style:none}.nc-container .nc_scale .btn_slide{color:#737383;background-image:none;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.nc-container .nc_scale span{text-align:center;width:40px;height:32px;line-height:32px;border:1px solid #ccc;position:absolute;left:0;cursor:move;background:#fff;z-index:2}.nc-container .nc_scale span.nc-lang-cnt{*line-height:34px;float:none;width:auto;height:auto;*height:34px;border:none;position:static;cursor:inherit;background:none;z-index:0;display:inline}.nc_slide_button{width:40px;height:32px;border:1px solid #ccc;position:absolute;left:0;cursor:move;background:#fff url("//g.alicdn.com/sd/ncpc/images/rt.png") no-repeat center;z-index:2}@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none){.nc_scale span{height:32px}}.nc-container .nc_scale .btnok{cursor:default;background:#fff url("//g.alicdn.com/sd/ncpc/images/yes.png") no-repeat center;z-index:3}.nc-container .nc_scale .btnok2{cursor:default;font-size:20px;background:#fff url("//g.alicdn.com/sd/ncpc/images/no.png") no-repeat center;z-index:3}.nc-container .nc_scale .btn_warn{cursor:default;color:#ff3f08;line-height:34px;text-align:center;font-size:20px;background:#fff;z-index:3}.nc-container .clickCaptcha_text .btn_refresh{font-size:20px}.nc-container .clickCaptcha_text .icon_close{line-height:30px;margin-left:8px;cursor:default;color:#ff3f08;font-size:16px;float:left;margin-right:2px;background:transparent;z-index:3}.nc-container .nc_captcha_img_text .icon_close{cursor:default;color:#ff3f08;font-size:16px;float:left;margin-right:4px;background:transparent;z-index:3;line-height:18px}.nc-container .errloading .icon_warn{cursor:default;color:#ff3f08;font-size:18px;float:left;background:transparent;z-index:3}.nc-container .nc_scale .btn_ok{cursor:default;line-height:34px;text-align:center;font-size:20px;background:#fff;z-index:3;color:#76c61d}.nc-container .nc_scale .nc_ok,.nc-container .nc_scale .nc_bg{background:#7ac23c}.nc-container .nc_scale .nc_bg{position:absolute;height:100%;_height:34px;left:0;width:10px}.nc-container .nc_scale div.redbar{background:#fc461e;opacity:.5;filter:alpha(opacity=50)}.nc-container .nc_scale div.orange{background:#f00}.nc-container .nc_scale .scale_text{width:100%;height:100%;text-align:center;position:absolute;z-index:1;background:transparent;color:#9c9c9c;line-height:34px;font-size:12px;cursor:pointer}.nc-container .nc_scale .scale_text2{text-align:left;color:#fff;font-size:12px;text-indent:10px}.nc-container .nc_scale .scale_text2 b{padding-left:0;font-weight:normal}.nc-container .nc_scale .scale_text.scale_loading_text{text-align:center}.nc-container .nc_scale .imgCaptcha,.nc-container .nc_scale .clickCaptcha{display:none;overflow:hidden;border:1px solid #ccc;background:#fff;z-index:20000;}.nc-container .nc_scale .imgCaptcha p.error span,.nc-container .nc_scale .clickCaptcha p.error span{line-height:normal}.nc-container .nc_scale .imgCaptcha{height:auto}.nc-container .nc_scale .clickCaptcha{position:absolute;left:0;top:35px;height:270px;background:#fff;display:none;}.nc-container .nc_scale .clickCaptcha p.error i{color:#ff3f08;font-style:normal}.nc-container .nc_scale .clickCaptcha div{position:static;clear:both;width:100%;background:#fff;height:auto}.nc-container .nc_scale .clickCaptcha .clickCaptcha_text{height:30px;line-height:30px;font-size:12px;color:#999;}.nc-container .nc_scale .clickCaptcha .clickCaptcha_text b{font-weight:normal}.nc_btn_2{position:absolute;right:0;top:0;cursor:pointer;margin:2px 9px 0 0}.nc_iconfont.nc_btn_2{position:absolute;right:0;top:0;cursor:pointer}.nc_iconfont.nc_btn_1{position:absolute;top:10px;right:5px}.nc_btn_1{top:10px;right:10px}.scale_text i{font-style:normal;border:none;position:static;cursor:default;color:#fffc00;background:none;display:inline;width:100%}.nc-container .clickCaptcha .clickCaptcha_img{margin:0 auto;clear:both;position:relative;}.nc-container .clickCaptcha .clickCaptcha_img img{width:230px;height:230px;margin-left:10px;margin-top:5px}.nc-container .clickCaptcha .clickCaptcha_btn{margin:10px 0 0 15px;position:relative;text-align:left;}.nc-container .clickCaptcha .clickCaptcha_btn img{cursor:pointer}.nc-container .imgCaptcha{position:absolute;left:0;top:35px;height:auto;padding-bottom:15px;border:1px solid #ccc;background:#fff;}.nc-container .imgCaptcha div{position:static;width:90%;background-color:#fff}.nc-container .imgCaptcha,.nc-container .clickCaptcha{text-align:left;}.nc-container .imgCaptcha a,.nc-container .clickCaptcha a{color:#ff3f08}.nc-container .imgCaptcha .imgCaptcha_text{height:42px;line-height:42px;width:120px;background:#fff;font-size:14px;text-align:left;color:#747474;float:left;margin-left:10px;}.nc-container .imgCaptcha .imgCaptcha_text input{margin-top:5px;height:30px;line-height:30px;font-size:14px;width:90px;background:#fff}.nc-container .imgCaptcha .imgCaptcha_text input:focus{outline:none;color:#bbb}.nc-container .imgCaptcha .imgCaptcha_btn{margin:0 0 0 12px;*margin-left:0;clear:both;padding-top:5px;width:90%;}.nc-container .imgCaptcha .imgCaptcha_btn img{cursor:pointer}.nc-container .imgCaptcha .nc_scale_submit{margin:0 auto;cursor:pointer;background-color:#fc461e;width:120px;height:32px;line-height:32px;color:#fff;text-align:center}.nc-container .imgCaptcha .imgCaptcha_img{margin:4px 0 0 100px;height:40px;width:130px;overflow:hidden;cursor:pointer;}.nc-container .imgCaptcha .imgCaptcha_img img{width:130px}.nc-container .imgCaptcha .imgCaptcha_img input{border:solid 1px #ccc}.nc-lang-ar_MA,.nc-lang-ar_SA,.nc-lang-iw_HE,.nc-lang-iw_IL{text-align:right;*text-align:left;}.nc-lang-ar_MA .nc_scale .scale_text2,.nc-lang-ar_SA .nc_scale .scale_text2,.nc-lang-iw_HE .nc_scale .scale_text2,.nc-lang-iw_IL .nc_scale .scale_text2{text-align:right;}.nc-lang-ar_MA .nc_scale .scale_text2 span,.nc-lang-ar_SA .nc_scale .scale_text2 span,.nc-lang-iw_HE .nc_scale .scale_text2 span,.nc-lang-iw_IL .nc_scale .scale_text2 span{*display:inline-block;padding:0 56px 0 0}.nc-lang-ar_MA .nc_captcha_img_text,.nc-lang-ar_SA .nc_captcha_img_text,.nc-lang-iw_HE .nc_captcha_img_text,.nc-lang-iw_IL .nc_captcha_img_text{*text-align:right}.nc-lang-ar_MA span.nc-lang-cnt,.nc-lang-ar_SA span.nc-lang-cnt,.nc-lang-iw_HE span.nc-lang-cnt,.nc-lang-iw_IL span.nc-lang-cnt{text-align:right;direction:rtl}.nocaptcha span.nc-lang-cnt{float:none;height:auto;line-height:30px}.nc-container{font-size:12px;-ms-touch-action:none;touch-action:none;}.nc-container p{margin:0;padding:0;display:inline}.nc-container .scale_text.scale_text span[data-nc-lang="_startTEXT"]{display:inline-block;width:100%}.nc-container .scale_text.scale_text.slidetounlock span[data-nc-lang="_startTEXT"]{background:-webkit-gradient(linear,left top,right top,color-stop(0,#4d4d4d),color-stop(.4,#4d4d4d),color-stop(.5,#fff),color-stop(.6,#4d4d4d),color-stop(1,#4d4d4d));-webkit-background-clip:text;-webkit-text-fill-color:transparent;-webkit-animation:slidetounlock 3s infinite;-webkit-text-size-adjust:none}.nc-container .nc_scale .nc-align-center.scale_text2{text-align:center;text-indent:-42px}@-webkit-keyframes slidetounlock{0%{background-position:-200px 0}100%{background-position:200px 0}}.nc-container.tb-login .clickCaptcha_text .icon_close{line-height:30px;margin-left:0;cursor:default;color:#ff3f08;font-size:16px;float:left;margin-right:0;background:transparent;z-index:3}.nc-container.tb-login{position:relative;margin-top:20px;display:none;}.nc-container.tb-login .nc_scale{width:auto;}.nc-container.tb-login .nc_scale .scale_text2{text-indent:-42px;text-align:center;}.nc-container.tb-login .nc_scale .scale_text2 b{padding:0}.nc-container.tb-login .nc_scale.nc_err div.scale_text{background:#f79977}.nc-container.tb-login .errloading{width:auto}.nc-container.tb-login .imgCaptcha,.nc-container.tb-login .clickCaptcha{width:252px;*width:256px;border:0;*height:300px;min-height:300px;max-height:inherit !important;}.nc-container.tb-login .imgCaptcha div.login-msg.error,.nc-container.tb-login .clickCaptcha div.login-msg.error{background:#fff2f2}.nc-container.tb-login .imgCaptcha .captcha-error,.nc-container.tb-login .clickCaptcha .captcha-error{position:absolute;top:0;width:244px;height:auto;margin-bottom:15px;padding:3px;border:solid 1px #ff8e8e;line-height:18px}.nc-container.tb-login .imgCaptcha .captcha-inform,.nc-container.tb-login .clickCaptcha .captcha-inform{font-size:110%;margin-left:20px}.nc-container.tb-login .imgCaptcha{padding-top:66px;}.nc-container.tb-login .imgCaptcha .imgCaptcha_text{width:100px;margin-left:0;}.nc-container.tb-login .imgCaptcha .imgCaptcha_text input:focus{color:#000}.nc-container.tb-login .imgCaptcha .imgCaptcha_img{width:120px;_width:100px}.nc-container.tb-login .imgCaptcha .imgCaptcha_btn{width:100%;margin-left:0}.nc-container.tb-login .imgCaptcha .nc_scale_submit{width:100%;height:36px;line-height:36px;margin-top:20px;margin-left:0;border-radius:3px;font-size:16px;font-family:Tahoma,Helvetica,Arial,sans-serif;background:#ff3f08}.nc-container.tb-login .clickCaptcha{padding-top:40px;}.nc-container.tb-login .clickCaptcha .clickCaptcha_text{text-indent:4px}.nc-container.tb-login .clickCaptcha .clickCaptcha_img img{margin-left:10px}.nc-container.tb-login .nc_btn_1{top:77px;_top:57px}.nc-container.tb-login .nc_btn_2{top:36px}.login .nc-container.tb-login .login-msg p,.login-box .nc-container.tb-login .login-msg p{width:auto;float:left}.nc-container.tb-login.nc-old-login{margin:20px 0 10px 0;width:250px;}.nc-container.tb-login.nc-old-login .nc_wrapper{width:250px}.nc-container.tb-login.nc-old-login .imgCaptcha,.nc-container.tb-login.nc-old-login .clickCaptcha{width:250px;min-height:auto;}.nc-container.tb-login.nc-old-login .imgCaptcha .captcha-error,.nc-container.tb-login.nc-old-login .clickCaptcha .captcha-error{line-height:16px}.nc-container.tb-login.nc-old-login .clickCaptcha{padding-top:28px;}.nc-container.tb-login.nc-old-login .clickCaptcha .clickCaptcha_img img{width:200px;height:200px}.nc-container.nc-old-login.show-click-captcha{padding-bottom:60px}.nc-container.nc-old-login.show-click-captcha.nc-tm-min-fix{padding-bottom:40px}.nc-container.tb-login.nc-tm-min-fix .clickCaptcha{max-height:340px !important}#content .login-box .bd .nc-container.tb-login .login-msg{margin:10px auto 15px auto}#content .login-box .bd .nc-container.tb-login.nc-old-login.show-click-captcha .login-msg{margin:2px 0 0 0}.nc-container .nc_scale .nc-cc{display:none;position:absolute;left:0;top:35px;z-index:20000;width:360px;height:570px;border:1px solid #5eaef1;border-radius:4px;background:#fff;font-size:14px;line-height:18px;color:#333;}.nc-container .nc_scale .nc-cc.nc-cc-status-loading .nc-cc-btn,.nc-container .nc_scale .nc-cc.nc-cc-status-verifing .nc-cc-btn{background-color:#90c1eb}.nc-container .nc_scale .nc-cc.nc-cc-status-loading .nc-cc-btn,.nc-container .nc_scale .nc-cc.nc-cc-status-verifing .nc-cc-btn,.nc-container .nc_scale .nc-cc.nc-cc-status-loading .nc-cc-refresh,.nc-container .nc_scale .nc-cc.nc-cc-status-verifing .nc-cc-refresh{cursor:default}.nc-container .nc_scale .nc-cc.nc-cc-status-loading .nc-cc-refresh,.nc-container .nc_scale .nc-cc.nc-cc-status-verifing .nc-cc-refresh{color:#999}.nc-container .nc_scale .nc-cc a{color:#3199f4;text-decoration:none}.nc-container .nc_scale .nc-cc .nc_iconfont{vertical-align:top;margin-right:8px}.nc-container .nc_scale .nc-cc-btn{display:inline-block;*display:inline;*zoom:1;vertical-align:top;letter-spacing:normal;word-spacing:normal;width:100px;line-height:30px;text-align:center;background-color:#3199f4;color:#fff;border-radius:4px;cursor:pointer;}.nc-container .nc_scale .nc-cc-btn.nc-cc-disabled{background-color:#90c1eb;cursor:default}.nc-container .nc_scale .nc-cc-btn .nc-lang-cnt{line-height:18px}.nc-container .nc_scale .nc-cc-header{padding:20px 20px 19px 20px;height:100px;background:#f4f8fa;border-bottom:1px solid #ccc}.nc-container .nc_scale .nc-cc-img1-box{float:left;width:100px;height:100px;margin-right:16px}.nc-container .nc_scale .nc-cc-txt{overflow:hidden;*zoom:1;line-height:30px;padding-top:11px}.nc-container .nc_scale .nc-cc-img2-box{position:relative;padding:0 20px;margin-top:20px}.nc-container .nc_scale .nc-cc-items{position:absolute;left:20px;_left:0;top:0;width:320px;overflow:hidden}.nc-container .nc_scale .nc-cc-items-inner{margin-right:-20px}.nc-container .nc_scale .nc-cc-item{position:relative;display:inline-block;*display:inline;*zoom:1;vertical-align:top;letter-spacing:normal;word-spacing:normal;margin-right:10px;margin-bottom:10px;border:1px solid #ccc;width:98px;height:98px;background:url("//gtms02.alicdn.com/tps/i2/T1ty2QFNNXXXc6Yc2r-1-1.gif");}.nc-container .nc_scale .nc-cc-item:hover{border-color:#3199f4}.nc-container .nc_scale .nc-cc-item .nc_iconfont{display:none;position:absolute;right:0;bottom:0;color:#3199f4;font-size:22px;margin-right:0}.nc-container .nc_scale .nc-cc-item.nc-cc-selected .nc_iconfont{display:block}.nc-container .nc_scale .nc-cc-tip{display:none;position:absolute;left:0;bottom:60px;width:360px;line-height:18px;text-align:center;color:#eb4f38;}.nc-container .nc_scale .nc-cc-tip span{line-height:normal}.nc-container .nc_scale .nc-cc-footer{position:absolute;left:0;bottom:20px;width:360px;height:30px;line-height:30px;text-align:center;}.nc-container .nc_scale .nc-cc-footer .nc_iconfont{color:#c4cbd0}.nc-container .nc_scale .nc-cc-refresh,.nc-container .nc_scale .nc-cc-wait{position:absolute;left:20px;top:0;color:#3199f4;cursor:pointer}.nc-container .nc_scale .nc-cc-wait{display:none}.nc-container .nc_scale .nc-cc-cancel{position:absolute;right:20px;top:0;color:#3199f4;cursor:pointer;}.nc-container .nc_scale .nc-cc-cancel .nc_iconfont{position:relative;top:-1px}.nc-container .nc_scale .nc-cc-loading{margin-top:247px;text-align:center;line-height:14px}.nc-container .nc_scale .nc-cc-loading-img{display:inline-block;*display:inline;*zoom:1;vertical-align:top;letter-spacing:normal;word-spacing:normal;vertical-align:middle;background:url("//img.alicdn.com/tps/TB1OdxsKpXXXXcgXFXXXXXXXXXX-14-14.gif") no-repeat;width:14px;height:14px;position:relative;top:-1px;margin-right:9px}.nc-container .nc_scale .nc-cc-fail{position:absolute;left:50%;top:50%;width:320px;height:180px;margin-left:-160px;margin-top:-90px;background:#fff;border-radius:4px}.nc-container .nc_scale .nc-cc-fail-inner{text-align:center;padding:55px 10px 10px}.nc-container .nc_scale .nc-cc-fail-action{margin:28px 0 18px;}.nc-container .nc_scale .nc-cc-fail-action a{display:inline-block;*display:inline;*zoom:1;vertical-align:top;letter-spacing:normal;word-spacing:normal;line-height:30px;margin-left:16px}.nc-container .nc_scale .nc-cc-contact{text-align:right;color:#666;padding-right:9px}.nc-container .nc_scale .nc-cc-mask{display:none;position:absolute;left:0;top:0;width:360px;height:570px;background:rgba(0,0,0,0.3);filter:progid:DXImageTransform.Microsoft.gradient(enabled='true',startColorstr='#4C000000', endColorstr='#4C000000');}:root .nc-container .nc_scale .nc-cc-mask{-webkit-filter:none;filter:none}.nc-container .nc_scale .nc-cc-arrow-1,.nc-container .nc_scale .nc-cc-arrow-2{display:none;position:absolute;top:340px;border:solid transparent;height:0;width:0}.nc-container .nc_scale .nc-cc-arrow-1{border-width:16px;margin-top:-1px}.nc-container .nc_scale .nc-cc-arrow-2{border-width:15px}.nc-container .nc_scale .nc-cc-right .nc-cc-arrow-1,.nc-container .nc_scale .nc-cc-left .nc-cc-arrow-1,.nc-container .nc_scale .nc-cc-right .nc-cc-arrow-2,.nc-container .nc_scale .nc-cc-left .nc-cc-arrow-2{display:block;_display:none}.nc-container .nc_scale .nc-cc-right{left:180px;top:-339px;}.nc-container .nc_scale .nc-cc-right .nc-cc-arrow-1{border-right-color:#5eaef1;left:-32px}.nc-container .nc_scale .nc-cc-right .nc-cc-arrow-2{border-right-color:#fff;left:-30px}.nc-container .nc_scale .nc-cc-left{left:-335px;top:-339px;}.nc-container .nc_scale .nc-cc-left .nc-cc-arrow-1{border-left-color:#5eaef1;right:-32px}.nc-container .nc_scale .nc-cc-left .nc-cc-arrow-2{border-left-color:#fff;right:-30px}</style><style type="text/css">.amap-container{cursor:url(https://webapi.amap.com/theme/v1.3/openhand.cur),default;}.amap-drag{cursor:url(https://webapi.amap.com/theme/v1.3/closedhand.cur),default;}</style></head>
</style>
</head>
<body class="account-page" style="visibility: visible;">
<div id="op-wrap">
    <div id="op-aside"></div>
    <div id="op-wrap-mask"></div>
    <div id="op-content">
        <!--main start-->
        <div class="content">
            <div class="main-c">
                <div class="main-flow">
                    <div class="flow-line">
                        <span class="flow-name flow-point-1 was-on">购物车</span>
                        <span class="flow-name flow-point-2 is-on">填写订单</span>
                        <span class="flow-name flow-point-3">完成支付</span>
                        <div class="flow-red-line flow-step-2"></div>
                        <span class="flow-circular flow-point-1 actived"></span>
                        <span class="flow-circular flow-point-2 active"></span>
                        <span class="flow-circular flow-point-3"></span>
                    </div>
                </div>
                <div class="mobile-big-title">填写订单</div>
            </div>
            {{var_dump($array)}}
            
            <div class="main-c order-info">
                <div class="user-address-panel clearfix">
                    <div class="title">收货人信息</div>
                    <div class="info" id="userAddressListPanel">
                    <div class="address-all-panel hide">
                    <div class="address-all-list clearfix">
                </div>
             </div>
            	<div class="add-address-rectangle hide">
            		<span>增加地址</span>
            	</div>
           <form action="./index.php?c=orders&a=orders" method="post">
            	<div class="address-form-panel show-address-form-panel" style="display: block;">
            		<div class="add-address-form">
            			<div class="address-form-box">
            			<div class="name-phone clearfix">
            				<span class="add-name normal-input-box">
            					<input id="addAddressName" name="linkname" class="normal-input" autocomplete="off" type="text" placeholder="收货人">
            					<span class="error-tip"></span>
            				</span>
            				<span class="add-phone normal-input-box">
            					<input id="addAddressPhone" name="tel" class="normal-input" autocomplete="off" type="text" placeholder="手机">
            					<span class="error-tip"></span>
            				</span>
            			</div>
            			<div class="address-select-container clearfix">
            				<div class="address-select-pc dropdown-2">
            					<div id="address-auto" class="dropdown-toggle select-box">
            						<span class="caret-2"></span>
            					</div>
            					<div class="dropdown-menu-2">
            						<div class="address-menu-container">
            							<div class="address-selected-list">
            								<div class="address-item city hide"></div>
            									<div class="address-item area hide"></div>
            							</div>
            						</div>
            					</div>
            				</div>
            				<div class="address-detail">
            						<div class="detail-input normal-input-box">
            							<input id="addAddressDetail" name="address" class="normal-input double-width-input address-detail-input" autocomplete="off" type="text" placeholder="详细地址">
            								<span class="error-tip"></span>
            						</div>
            				</div>
            			</div>
            			<!-- <div class="address-btns clearfix">
            				<span id="submitAddAddress" class="save-btn">保存</span>
            				<span id="cancelAddAddress" class="cancel-btn">取消</span>
            			</div> -->
            			</div>
            		</div>
            	</div>
            </div>
           
                <!--配送方式-->
                <div class="send-way clearfix">
                    <div class="title">配送时间</div>
                    <div class="info clearfix" style="line-height: 1.5">
                            <span class="send-tips">18:00前支付预计24小时内发货，18:00后支付预计48小时内发货</span>
                    </div>
                </div>
                <!-- 商品列表 -->
                <div class="goods-list clearfix">
                    <div class="title">商品清单
                    	
                        <span class="m-title-arrow">共 <strong></strong> 件商品<i class="i-arrow" data-btn="show"></i></span>
                    </div>
                    <div class="info">
                        <div id="shop-list-box">
					        <ul class="goods-list-box">
								<li class="list-head">
									<ul class="clearfix">
										<!-- li增加class -->
										<li class="tb-name"><span>商品</span></li>
										<li class="tb-price">价格</li>
										<li class="tb-number">数量</li>
										<li class="tb-total">小计</li>
									</ul>
								</li>
								
								<li class="list-body">
									<div class="main-goods">
										<ul class="clearfix ">
											<li class="tb-name">
												<img class="goods-img" src="../public/goods/">
												<span class="name-info">
													<span>
														<a href=""></a>
														<span class="stock-tip"></span>
													</span>
												</span>
											</li>
											<li class="tb-price price">
												<div>
													<p>¥ </p>
												</div>
											</li>
						
											<li class="tb-number"><span>×</span></li>

											<li class="tb-total">¥ </li>
										</ul>
									</div>
								</li>
							
							</ul>
    					</div>
                            <p class="back-buy">
                                <a href="">
                                    <span class="arrow-right back-buy-icon"></span><span>返回购物车修改</span>
                                </a>
                            </p>
                    </div>
             	</div>
             <!-- 发票 -->
                <div class="set-invoice clearfix">
                    <div class="info">
                        <label class="need-invoice">
                            <span>发票</span>
                        </label>

                        <div class="choose-invoice">
                            <div class="invoice-type-box">
                                <ul>
                                    <li class="active" data-code="2">电子发票</li>   
                                </ul>
                            </div>
                            <p class="invoice-type">
                                <span class="tit">发票内容：</span>商品明细
                            </p>
                        </div>
                    </div>
                </div>
        <div class="main-c total-price">
            <div class="inner">
                <div class="title">&nbsp;</div>
                <div class="info clearfix">
                    <div class="left">
                        <p>商品总金额：<span class="all-price">¥ </span></p>
                        <p>优惠金额：<span class="coupon-money">-¥0</span></p>
                        <p>运费：<span class="ship-price">+¥0</span></p>
                        <p>支付方式：<span class="pay-way">在线支付</span></p>
                    </div>
                    <div class="right">
                        <p class="total-pay">应付总额：<em>¥ </em></p>
                        <input type="submit" class="submit-order-btn" value="提交订单">
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
</body>
</html>
@endsection
@section('title','订单结算')