<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> site sheypur </title>
<link href="style.css?<?php echo rand(1,10000); ?>" rel="stylesheet" type="text/css">
<script src="js/jquery.js"></script>
<script>
	$(document).ready(function() {
        $(".map").mouseenter(function(){
		var id=$(this).attr("id");
		$("."+id).css("color","orange");
		$("."+id).css("font-size","20px");
		$("."+id).css("font-weight","bold");
    }); 
	$(".map").mouseout(function(){
		var id=$(this).attr("id");
		$("."+id).css("color","#0078c1");
		$("."+id).css("font-size","1em");
		$("."+id).css("font-weight","normal");
	});
	
	});
</script>

</head>
<body>
<!-- starting header-->
	<div id="header">
    	<div id="header1"> <img src="image/Capture.PNG"> </div>
        <div id="header2"> همه آگهی ها | همه فروشگاه ها | حساب من</div>
        <div id="header3">
        	پشتیبانی
            <span id="space"> </span>
            <button id="btn"> +ثبت آگهی رایگان </button>
        </div>
    </div>
<!--end header-->