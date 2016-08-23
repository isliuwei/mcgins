<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
	<title>麦金思少儿英语</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/index.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<style>

	</style>
</head>
<body>
	<?php
		include "connect.php";	
		$content = "SELECT * FROM t_webinfo";
		$result = mysqli_query($link, $content);
		$rs = mysqli_fetch_array($result);
		
		include	"header.php";
	?>

	

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
                        <h2 class="text-center">特色一</h2>
                        <p>首家引进被美国英语教育界公认，并获得普遍赞誉的“最适合中国儿童英语学习”的原版教材。</p>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/icon2.jpg" alt="" class="img-circle img-responsive center-block" width="74px" height="74px">
                        <h2 class="text-center">特色二</h2>
                        <p>由美国TESL硕士、K-12 ESL美国教育部注册教师、曾任教于美国公立学校、并曾担任美国加州知名培训机构校区总监的Ms.Laura，亲自督导教学、培训师资。</p>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/icon3.jpg" alt="" class="img-circle img-responsive center-block" width="74px" height="74px">
                        <h2 class="text-center">特色三</h2>
                        <p>美国英语教育专家团队全程提供教学支持，实时更新来自美国最新的教学资源与方法。</p>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/icon4.jpg" alt="" class="img-circle img-responsive center-block" width="74px" height="74px">
                        <h2 class="text-center">特色四</h2>
                        <p>教师团队均经过严格选拔、考核、培训，拥有TESL青少儿英语教师资格，个人教学能力均达到麦金思教学标准。</p>
                    </li>
                </ul>
            </div>
            <div class="feature-second col-md-12 col-sm-12">
                <ul>
                    <li class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/icon5.jpg" alt="" class="img-circle img-responsive center-block" width="74px" height="74px">
                        <h2 class="text-center">特色五</h2>
                        <p>确保轻松应对在校英语考试，并无缝对接美国中小学课程，为考取名校、出国留学、出国考试打牢基础</p>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/icon6.jpg" alt="" class="img-circle img-responsive center-block" width="74px" height="74px">
                        <h2 class="text-center">特色六</h2>
                        <p>确保轻松应对在校英语考试，并无缝对接美国中小学课程，为考取名校、出国留学、出国考试打牢基础</p>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/icon7.jpg" alt="" class="img-circle img-responsive center-block" width="74px" height="74px">
                        <h2 class="text-center">特色七</h2>
                        <p>确保轻松应对在校英语考试，并无缝对接美国中小学课程，为考取名校、出国留学、出国考试打牢基础</p>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/icon8.jpg" alt="" class="img-circle img-responsive center-block" width="74px" height="74px">
                        <h2 class="text-center">特色八</h2>
                        <p>权威测评体系，为每个孩子量身定制专属英语学习规划。</p>
                    </li>
                </ul>
            </div>                  
        </div>

    </div>
</div>
<?php
	include	"footer.php";
?>
</div>
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.goup.min.js"></script>
	<script src="js/style.js"></script>
</body>
</html>

