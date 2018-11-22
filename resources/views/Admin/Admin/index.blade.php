@extends("Admin.AdminPublic.public")
@section("main")
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<title></title>
	<style type="text/css">  
    html{height:100%}    
    body{height:100%;margin:0px;padding:0px}    
    #container{height:600px;width: 1100px;}    
	</style> 
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=bmlVmvjr3G3yta4l6CWkvvNed9VqtqgV"></script>
</head>
<body>
	<div id="container"></div> 
</body>
<script type="text/javascript">	
	var map = new BMap.Map("container");
	var point = new BMap.Point(113.3972297771,23.1184221607); 
	map.centerAndZoom(point, 15);
	// 添加带有定位的导航控件
  var navigationControl = new BMap.NavigationControl({
    // 靠左上角位置
    anchor: BMAP_ANCHOR_TOP_LEFT,
    // LARGE类型
    type: BMAP_NAVIGATION_CONTROL_LARGE,
    // 启用显示定位
    enableGeolocation: true
  });
  map.addControl(navigationControl);
  // 添加定位控件
  var geolocationControl = new BMap.LocalCity();
  geolocationControl.addEventListener("locationSuccess", function(e){
    // 定位成功事件
    var address = '';
    address += e.addressComponent.province;
    address += e.addressComponent.city;
    address += e.addressComponent.district;
    address += e.addressComponent.street;
    address += e.addressComponent.streetNumber;
    alert("当前定位地址为：" + address);
  });
  geolocationControl.addEventListener("locationError",function(e){
    // 定位失败事件
    alert(e.message);
  });
  map.addControl(geolocationControl);
</script>
</html>
@endsection
@section('title','后台首页')