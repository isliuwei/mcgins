<!DOCTYPE html>
<html lang="en" ng-app="myApp">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>intro</title>
		<base href="<?php echo site_url();?>">
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/intro.css">
	</head>
	<body ng-controller="myCtrl">
		<!-- 头部 -->
		<?php include 'header.php'; ?>
		<!-- 头部结束 -->
		<div class="container">
			<div class="row">
				<div id="banner" class="col-md-10 col-md-offset-1">
					<img src="img/logo1.png" class="img-responsive center-block" alt="">
					<!-- <p class="col-md-8 col-md-offset-2 ">麦金思青少儿英语（McGins English Education）是由在美国从事TESL教学与研究数年的国内外教育专
						家及一线英语教师团队，专为中国青少年儿童打造的英语学习项目，帮助中国孩子实现英语运用能力和应试水平双提
						升。麦金思旨在把美国的ESL教育理念和方式，转化为适应中国孩子英语学习特点和实际需求的教育模式。美国教育
						界有学者提出，“若要适应未来国际社会的不确定性挑战、成为世界公民，各国儿童应当从小被有意识地被培养成为
						‘3IN’人才”。麦金思通过英语引导青少年儿童建立世界观和人生格局，成为未来国际社会需要的独立、国际化、
					跨文化的“3IN”人才。</p> -->
					<p class="col-md-8 col-md-offset-2" ng-bind="'ABOUT_US' | translate"></p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div id="intro" class="col-md-10 col-md-offset-1">
					<h4 class="text-center aa">3IN人才 </h4>
					<h5 class="text-center bb">3IN Talents </h5>
					<div class="talents text-center  ">
						<div class="talent col-md-4">
							<div class="title">
								<div class="talent-box">
									<h4>独立 </h4>
									<h5>Independent Talent </h5>
								</div>
							</div>
							<div class="content">
								<div class="talent-box">
									<p>自主学习、创新、<br> 生活和职业规划能力</p>
									<p>The talent of  self-study, <br>  creativity, <br>  life and career planning.</p>
								</div>
							</div>
						</div>
						<div class="talent col-md-4">
							<div class="title">
								<div class="talent-box">
									<h4>国际化 </h4>
									<h5>International Talent </h5>
								</div>
								
							</div>
							<div class="content">
								<div class="talent-box">
									<p>具有国际化视野和能力，<br> 能放眼世界，抓住机遇</p>
									<p>The talent of  international <br>perspectives and seizingthe global opportunities. </p>
								</div>
							</div>
						</div>
						<div class="talent col-md-4">
							<div class="title">
								<div class="talent-box">
									<h4>跨文化 </h4>
									<h5>Intercultural Talent </h5>
								</div>
							</div>
							<div class="content">
								<div class="talent-box">
									<p>拥有包容与 <br>接受不同文化的胸怀，<br>求同存异，实现自我价值</p>
									<p>The talent of embracing <br> other cultures and <br>celebrating differences.</p>
								</div>
								
							</div>
						</div>
						
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
								<ul class="website">
									友情链接：<br/>
									<li><a href="">教育网</a></li>
									<li><a href="">新闻网</a></li>
									<li><a href="">英语网</a></li>
									<li><a href="">听写网</a></li>
								</ul>
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
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.goup.min.js"></script>
<script src="js/style.js"></script>

	</body>
</html>