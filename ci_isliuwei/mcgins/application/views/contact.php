<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
	<title>联系我们</title>
	<base href="<?php echo site_url();?>">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/contact.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=5dEsfUlwMV0GdHlxoqgvlxE0"></script> 
	<style>
		#allmap{
			width: 400px;
			height: 200px;
		}
	</style>
</head>
<body ng-controller="myCtrl">
<!-- 头部 -->


<?php include 'header.php'; ?>
<!-- 头部结束 -->
<div class="container">
	<div class="row">
		<div id="content" class="col-md-10 col-md-offset-1">
			<div class="info col-md-6" >
				<div class="title text-center">联系我们</div>
				<ul>
                    <li><a href="tel:13809764375">电话 Telephone: 0451-55157643</a></li>
                    <li><a href="">微信 WeChat: 86142083571</a></li>
					<li><a href="mailto:09162839876@qq.com">邮箱 Email: 09162839876@qq.com</a></li>
                    <li><a href="www.mcgins.com">网址 Website: www.mcgins.com</a></li>
                    地址：
					<li>
黑龙江省哈尔滨市南岗区哈西绥化路纳帕英郡S57
（松雷中学斜对面，69路、83路、203路纳帕英郡小区站）</li>
				</ul>
				 <div id="allmap"></div>
			</div>
		</div>
	</div>
</div>
<!-- 尾部 -->
<footer class="navbar-static-bottom ">
    <div id="footer">
        <div class="container ">
            <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="col-md-6 col-sm-6" >
                    <!-- 链接 -->
                    <!-- <ul class="website">
                    友情链接：<br/> 
                        <li><a href="">教育网</a></li>
                        <li><a href="">新闻网</a></li>
                        <li><a href="">英语网</a></li>
                        <li><a href="">听写网</a></li>
                    </ul> -->
                    <!-- 联系方式 -->
                    <ul class="">
                        <li><a href="mailto:09162839876@qq.com">邮箱：09162839876@qq.com</a></li>
                        <li><a href="www.mcgins.com">网址：www.mcgins.com</a></li>
                        <li><a href="tel:13809764375">电话：13809764375</a></li>
                        <li><a href="">微信：86142083571</a></li>
                    </ul>


                    
                </div>

                <!-- 地址 -->
                <div class="col-md-6 col-sm-6">
                    <div class="addr col-md-8">
                        联系地址：<br/>
                        黑龙江省哈尔滨市南岗哈西绥化路纳帕英郡S57<br/>(松雷中学斜对面，69路、83路纳帕英郡小区站)
                    </div>
                    <div class="QR col-md-4">
                        <img src="img/QR code.jpg" alt="">
                    </div>
                </div>
            	
            </div>
            </div>
        </div>
    </div>

</footer>
<div id="power-by">
<!-- 尾部结束 -->
</div>
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.goup.min.js"></script>
	<script src="js/style.js"></script>
	<script src="http://api.map.baidu.com/api?v=2.0&ak=AMt1vrxwTqGzf1I94PMx7K0u" type="text/javascript"></script>
<script type="text/javascript">
  // 百度地图API功能
  var map = new BMap.Map("allmap");
  var point = new BMap.Point(126.600002,45.691483);
  map.centerAndZoom(point, 17);
  var marker = new BMap.Marker(point);  // 创建标注
  map.addOverlay(marker);               // 将标注添加到地图中
  marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
  map.addControl(new BMap.MapTypeControl());   //添加地图类型控件
  //map.setCurrentCity("北京");          // 设置地图显示的城市 此项是必须设置的
  map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
</script>

</body>
</html>

