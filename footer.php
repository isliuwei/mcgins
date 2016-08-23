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
                        <li><a href="mailto:09162839876@qq.com">邮箱：
                        	<?php 
                        		echo $rs['mail'];
                        	?></a></li>
                        <li><a href="www.mcgins.com">网址：
	                        <?php
	                        	echo $rs['website'];
	                        ?></a></li>
                        <li><a href="tel:13809764375">电话：
	                        <?php
	                        	echo $rs['mobil'];
	                        ?></a></li>
                        <li><a href="">微信：
                        	<?php
                        		echo $rs['wechat'];
                        	?></a></li>
                    </ul>
                </div>
                <!-- 地址 -->
                <div class="col-md-6 col-sm-6">
                	 联系地址：<br/>
                    <div class="addr col-md-8">
                    <?php
                    	echo $rs['addr'];
                    ?><br/>
                    <?php
                    	echo $rs['addrmore'];
                    ?>
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