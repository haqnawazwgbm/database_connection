<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="noIE" lang="en-US">
<!--<![endif]-->
<?php
	require_once('config/connection.php');
?>	
<!-- Mirrored from technext.github.io/Euro-Travels/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Oct 2017 09:22:47 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
		<!-- meta -->
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
			<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
	<title>Post</title>
</head>
<body>
	<form action="post.php" method="POST">
		<label>Company Name</label>
		<input type="text" name="company_name" />
		<label>Location</label>
		<input type="text" name="location" />
		<label>Payment Gatway</label>
		<input type="text" name="payment_gatway" />
		<button name="post" value="true">Submit</button>
	</form>
</body>
</html>