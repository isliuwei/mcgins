<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>McGins English后台管理</title>
  <base href="<?php echo site_url();?>">
  <meta name="description" content="这是一个 index 页面">
  <meta name="keywords" content="index">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->

<?php include 'admin-header.php'; ?>

<div class="am-cf admin-main">
  <!-- sidebar start -->
  <?php include 'admin-sidebar.php'; ?>
  <!-- sidebar end -->

  <!-- content start -->
  <div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">首页</strong></div>
      </div>
        <table class="am-table">
            <thead>
                <tr>
                    <th>麦金思课程级别Levels</th>
                    <?php 
                    foreach ($courseInfo as $course){
                    ?>
                    <th><?php echo $course -> levels ?></th>
                    <?php
                    }
                    ?>                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>适合年龄段Age</td>
                    <?php 
                    foreach ($courseInfo as $course){
                    ?>
                    <td><?php echo $course -> age ?></td>
                    <?php
                    }
                    ?>
                </tr>
                <tr>
                  <td>课程配置Courses</td>
                  <?php 
                  foreach ($courseInfo as $course){
                  ?>
                  <td><?php echo $course -> courses ?></td>
                  <?php
                  }
                  ?>
                </tr>
                <tr>
                  <td>课程介绍Introduction</td>
                  <?php 
                  foreach ($courseInfo as $course){
                  ?>
                  <td>
                    <p><?php echo $course -> intro ?></p>
                  </td>
                  <?php
                  }
                  ?>
                </tr>
                <tr>
                <!-- 占位 -->
                  <td></td>
                  <?php 
                  foreach ($courseInfo as $course){
                  ?>
                  <td>
                  <form class="am-form" action="admin/get_courseInfo" method="get">
                    <input type="hidden" name="courseInfo_id" value="<?php echo $course -> id;?>">
                  </form>
                  <button type="button" data-id="<?php echo $course -> id; ?>" class="am-btn am-btn-primary am-btn-update">
                    <span class="am-icon-pencil-square-o"></span>修改
                  </button>
                  </td>
                  <?php
                  }
                  ?>
                </tr>               
            </tbody>
        </table>
    
    </div>

    <?php include 'admin-footer.php' ;?>
  </div>
  <!-- content end -->

</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="assets/js/amazeui.min.js"></script>
<script src="assets/js/app.js"></script>
<script>

  $(function(){
    $('.am-btn-update').on('click', function(){
      var Id =  $(this).data('id');
      if(confirm('确定是否更新记录!?')){
          location.href = 'admin/get_courseInfo?courseInfo_id='+Id;
          // location.href = 'admin/get_courseInfo/'+Id;
      }
    });
  });
</script>
</body>
</html>
