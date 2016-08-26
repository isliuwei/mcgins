//回到顶部
$(document).ready(function () {
    $.goup({
        trigger: 100,
        bottomOffset: 150,
        locationOffset: 100,
        title: '',
        titleAsText: true,
    });
});
//nav滑过
$('#nav li').hover(function(){
	$(this).addClass("choose");
}, function(){
	$(this).removeClass("choose");
});
//手机导航菜单
/*var oNav = document.getElementById('nav');
var oUl = oNav.getElementsByTagName('ul');
var aLi = oUl.children;
var oChange = document.getElementById('change');

var mWidth = window.innerWidth|| document.documentElement.clientWidth|| document.body.clientWidth;
if(mWidth<=767){
	// for(){

	// }
	$('#change:first-child').css('color', 'red');
	console.log(mWidth);
}
*/
// var oHeader = document.getElementById('header');
// var
/*$('#header button').toggle(function(){
	$('#nav').css({
		'display': 'block'
	})
}, function(){
	$('#nav').css({
		'display': 'none'
	})
});*/
	var bFlag = true;
$('#header button').on('click', function(){
	if(bFlag){
		$('#nav').css({
			'display': 'block'
		})
		bFlag = false;
	}else{
		$('#nav').css({
			'display': 'none'
		})
		bFlag = true; 	
	}
});