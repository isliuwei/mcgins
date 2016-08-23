	<?php
		//创建数据库连接 打开
		$link = @mysqli_connect('localhost', 'root' ,'') or die ('数据库连接失败');
		//选择数据库
		@mysqli_select_db($link, 'mcgins') or die('选择数据库失败');
		//设定传输编码
		mysqli_set_charset($link, 'UTF8');
	?>