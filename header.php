<?php 
	include 'src/config.php';
?>

<!doctype html>
<html><head>
<meta charset="utf-8">
<title> site sheypur </title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="assets/css/style.css?<?php echo rand(1,10000); ?>" rel="stylesheet" type="text/css">
<script src="assets/js/jquery.js"></script>
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
    	<div id="header1"> <a href="index.php"><img src="assets/image/Capture.PNG"> </a></div>
        <div id="header2"> همه آگهی ها | همه فروشگاه ها | حساب من 

        <?php 

        	if(isset($_SESSION['username']))
        		echo "<a href='src/logout.php' class='btn btn-danger btn-sm'>خروج ( ".$_SESSION['username']." )</a>";

        	else {
        		echo "<a href='login.php' class='btn btn-success btn-sm'>ورود و ثبت نام</a>";
        	}
         ?>


        </div>
        <div id="header3">
        	پشتیبانی
            <span id="space"> </span>
            <button id="btn"> + ثبت آگهی رایگان </button>
        </div>
    </div>
<!--end header-->