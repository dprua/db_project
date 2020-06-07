<!DOCTYPE HTML>
<!--
	Monochromed by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<?php
session_start();
if( isset( $_SESSION['mail'] ) ) {
	$jb_login = TRUE;
}
?>
<html>
	<head>
		<title>SRP</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<?php
	$conn = new mysqli("localhost", "emawlrdl11", "project11*", "emawlrdl11");
	if($conn->connect_error){
	  die("Connection failed: " . $conn->connect_error);
	}
	?>

	<body class="homepage">
<!-- Header -->
	<div id="header">
    <?php
      if($jb_login){
        $mail = $_SESSION['mail'];
        echo "<div class='login'> <b> $mail </b> 님 </div>";
      }else{
    ?>
	    <a href="login_resist_form.php" class="login">login / register</a>
    <?php
    }
    ?>
		<div class="container">

			<!-- Logo -->
				<div id="logo">
					<h1><a href="mainpage.php">SRP</a></h1>
					<span>Design by TEMPLATED</span>
				</div>
				<div class ="search">
					<form name="search_form" method="post" action="playerReviewPage.php">
						<input type = "text" name ='search_name' placeholder= "선수명을 입력하세요">
						<button type="submit" class="mybutton">검색</button>
					</form>
				</div>
		</div>
	</div>
<!-- Header -->

<!-- Main -->
	<div id="main">
		<div class="container">

			<header>
				<h2 style="text-align:center" >손흥민 하이라이트</h2>
			</header>
			<p align ="middle"><iframe width="560" height="315" src="https://www.youtube.com/embed/bNyFaCgbB2k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
		</div>
	</div>
<!-- Main -->

<!-- Copyright -->
	<div id="copyright">
		<div class="container">
			Copyright(c)2020 DBterm All rights reserved.
		</div>
	</div>

</body>
</html>
