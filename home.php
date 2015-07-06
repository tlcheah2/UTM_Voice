<?php
session_start();
if(empty($_SESSION['username'])) 
{
   header("location:index.html");
}
$name = $_SESSION['username'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

<script>
</script>
</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<span class="icon icon-fire"></span>
			<h1><a href="#">UTM Voice</a></h1>
			<span>A P2P Video Conferencing Tool</a></span> </div>
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="#" title="UTM Voice">Welcome, <?php echo $name?></a></li>
				<li><a target=_blank" href="http://10.212.3.79:1112/audio.html" title="Audio Calling">Audio Calling</a></li>
				<li><a target="_blank" href="http://10.212.3.79:1112/video.html" title="Video Calling">Video Calling</a></li>
				<li><a target="_blank" href="http://192.168.43.250:1111/multitextchat.html" title="Group Chat">Group Text Chat</a></li>
				<li><a href="logout.php" title="Logout">Logout</a></li>
                <!-- <li id="video_conf"><a href="http://10.212.4.101:1234/ title="Video Conference">Video Conferencing</a></li> -->
			</ul>	
		</div>
	</div>
</div>
<div id="wrapper4">
	<div id="footer" class="container">
		<div>
			<header class="title">
				<h2>Get in touch with Designer</h2>
				<span class="byline">If you wish to know more about me, you can contact me through following method</span> </header>
			<ul class="contact">
				<li><a target="_blank" href="http://twitter.com/teklooncheah" class="icon icon-twitter"><span>Twitter</span></a></li>
				<li><a target="_blank" href="http://facebook.com/teklooncheah" class="icon icon-facebook"><span></span></a></li>
			</ul>
		</div>
	</div>
</div>
<div id="copyright">
	<p>Copyright (c) 2015 WWW.UTM.MY All rights reserved. | Design by Tek Loon.</p>
</div>
</body>
</html>
