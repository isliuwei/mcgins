<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
	<title>麦金思少儿英语</title>
	<base href="<?php echo site_url();?>">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/bootstrap.min.css" >
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<style>
		

	</style>
</head>
<body ng-controller="myCtrl">
<!-- 头部 -->
<?php include 'header.php'; ?>
<!-- 头部结束 -->

<!-- 轮播图 -->
<div id="carousel">
	<div class="container main-carousel">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						<li data-target="#carousel-example-generic" data-slide-to="3"></li>
					</ol>

					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="img/banner1.jpg" alt="...">
							<div class="carousel-caption">
							</div>
						</div>
						<div class="item">
							<img src="img/banner2.jpg" alt="...">
							<div class="carousel-caption">
							</div>
						</div>
						<div class="item">
							<img src="img/banner3.jpg" alt="...">
							<div class="carousel-caption">
							</div>
						</div>
						<div class="item">
							<img src="img/banner4.jpg" alt="...">
							<div class="carousel-caption">
							</div>
						</div>
					</div>

					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span aria-hidden="true"><i class="fa fa-angle-left carousel-direction"></i></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span aria-hidden="true"><i class="fa fa-angle-right carousel-direction"></i></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>			
		</div>
	</div>
	
</div>
<!-- <div id="carousel">
	<div class="container">
	    <div class="row">
	        <div id="carousel-example-generic" class="carousel slide col-md-10 col-md-offset-1" data-ride="carousel">

	          <ol class="carousel-indicators">
	            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
	          </ol>

	          <div class="carousel-inner" role="listbox">
	            <div class="item active">
	              <img src="img/banner1.jpg" alt="...">
	              <div class="carousel-caption">
	              </div>
	            </div>
	            <div class="item">
	              <img src="img/banner2.jpg" alt="...">
	              <div class="carousel-caption">
	              </div>
	            </div>
	            <div class="item">
	              <img src="img/banner3.jpg" alt="...">
	              <div class="carousel-caption">
	              </div>
	            </div>
	            <div class="item">
	              <img src="img/banner4.jpg" alt="...">
	              <div class="carousel-caption">
	              </div>
	            </div>
	          </div>

	          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	            <span aria-hidden="true"><i class="fa fa-angle-left carousel-direction"></i></span>
	            <span class="sr-only">Previous</span>
	          </a>
	          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	            <span aria-hidden="true"><i class="fa fa-angle-right carousel-direction"></i></span>
	            <span class="sr-only">Next</span>
	          </a>
	        
	    	</div>
    	</div>
	
	</div>
</div> -->
<!-- 主体 -->
<div class="container">
    <div class="row">
        <div id="content" class="col-md-10 col-md-offset-1">
            <div class="feature-first col-md-12 col-sm-12">
                <div class="title">
                    <h1 class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 text-center">麦金思特色教育</h1>
                    <p class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">McGins English Education Feature</p>
                </div>
                <ul>
                    <li class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/icon1.jpg" alt="" class="img-circle img-responsive center-block" width="74px" height="74px">
                        <h2 class="text-center" ng-bind="'Features.item1.title1' | translate"></h2>
                        <p class="{{'JUSTIFY' | translate}}" ng-bind="'Features.item1.content1' | translate"></p>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/icon2.jpg" alt="" class="img-circle img-responsive center-block" width="74px" height="74px">
                        <h2 class="text-center" ng-bind="'Features.item2.title2' | translate"></h2>
                        <p class="{{'JUSTIFY' | translate}}" ng-bind="'Features.item2.content2' | translate"></p>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/icon3.jpg" alt="" class="img-circle img-responsive center-block" width="74px" height="74px">
                        <h2 class="text-center" ng-bind="'Features.item3.title3' | translate"></h2>
                        <p class="{{'JUSTIFY' | translate}}" ng-bind="'Features.item3.content3' | translate"></p>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/icon4.jpg" alt="" class="img-circle img-responsive center-block" width="74px" height="74px">
                        <h2 class="text-center" ng-bind="'Features.item4.title4' | translate"></h2>
                        <p class="{{'JUSTIFY' | translate}}" ng-bind="'Features.item4.content4' | translate"></p>
                    </li>
                </ul>
            </div>
            <div class="feature-second col-md-12 col-sm-12">
                <ul>
                    <li class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/icon5.jpg" alt="" class="img-circle img-responsive center-block" width="74px" height="74px">
                        <h2 class="text-center" ng-bind="'Features.item5.title5' | translate"></h2>
                        <p class="{{'JUSTIFY' | translate}}" ng-bind="'Features.item5.content5' | translate"></p>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/icon6.jpg" alt="" class="img-circle img-responsive center-block" width="74px" height="74px">
                        <h2 class="text-center" ng-bind="'Features.item6.title6' | translate"></h2>
                        <p class="{{'JUSTIFY' | translate}}" ng-bind="'Features.item6.content6' | translate"></p>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/icon7.jpg" alt="" class="img-circle img-responsive center-block" width="74px" height="74px">
                        <h2 class="text-center" ng-bind="'Features.item7.title7' | translate"></h2>
                        <p class="{{'JUSTIFY' | translate}}" ng-bind="'Features.item7.content7' | translate"></p>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/icon8.jpg" alt="" class="img-circle img-responsive center-block" width="74px" height="74px">
                        <h2 class="text-center" ng-bind="'Features.item8.title8' | translate"></h2>
                        <p class="{{'JUSTIFY' | translate}}" ng-bind="'Features.item8.content8' | translate"></p>
                    </li>
                </ul>
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
                        <li><a href="tel:13809764375">电话：13809764375</a>&nbsp;<a href="">微信：86142083571</a></li>
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
<script src="js/jquery.goup.min.js"></script>
<script src="js/style.js"></script>

</body>
</html>

