<!-- 头部 -->
<header class='navbar navbar-fixed-top' id='main-navbar' role='banner' style="background: #fff">
	
	<div class="container">
		<div class="row">
			<div id="header" class="col-md-10 col-md-offset-1">
				<!-- logo -->
				<a href="index.html" class="col-md-5 col-sm-5">
					<img src="img/header-logo.jpg" alt="" class="">
				</a>
				<!-- 按钮 -->
				<button type="button" class="navbar-toggle navbar-default collapsed" data-toggle="collapse" data-target="">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- 电话 -->
				<div id="tel" class="col-md-5 col-sm-4 col-xs-7">
					<a href="tel:0451-55157643" >咨询电话：<?php
						echo $rs['tel'];
					?></a>
					
				</div>
				<!-- 中英文 -->
				<div id="change" class="col-md-2 col-sm-3 col-xs-5">
					<a href="#" class="">中文</a> |
					<a href="#" class="">English</a>
				</div>
				
			</div>

		</div>
	</div>
	<!-- 导航栏 -->
	<div id="nav" class="">
		<div class="container">
			<div class="row">
			    <ul class="navigation col-md-10 col-md-offset-1">
			        <li><a href="index.php">首页</a></li>
			        <li><a href="intro.php">了解我们</a></li>
			        <li><a href="course.php">课程体系</a></li>
			        <li><a href="team.php">麦金思团队</a></li>
			        <li><a href="job.php">招聘信息</a></li>
			        <li><a href="javascript:;">常见问题</a></li>
			        <li><a href="contact.php">联系我们</a></li>
			        <li><a href="news.php">最新动态</a></li>
			    </ul>  
				</div>
		</div>
			
	</div>
</header>
<!-- 头部结束 -->