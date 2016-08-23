<?php
		include "connect.php";	
		$tel = "SELECT * FROM t_webinfo WHERE id=1";
		$result = mysqli_query($link, $tel);
		$rs = mysqli_fetch_array($result);
		echo $rs['content'];
?>