<!--Head Starts-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Pragma" content="cache">
<meta name="ROBOTS" content="All">
<meta name="keywords" content="news,u headline, headlines, technology, latest news, tech news, nepal news, nepal online news, online nepal, tech nepal">
<meta name="description" content="news, headline, headlines, technology, latest news, tech news, nepal news, nepal online news, online nepal, tech nepal">
<link href="PHP Enter Demo_files/favicon.ico" type="image/x-icon" rel="shortcut icon">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/mobile.css">
<link rel="stylesheet" type="text/css" href="css/sliderstyle.css">
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/jquery.cycle2.min.js"></script>
<title>Munal: Home</title>
<style>

#nav ul li a:hover {
    border-bottom:3px blue solid;
    }
 
#nav ul li .active {
    border-bottom:3px blue solid;
    }
</style>
<script>
$(function() {
     var pgurl = window.location.href.substr(window.location.href
.lastIndexOf("/")+1);
     $("#nav ul li a").each(function(){
          if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
          $(this).addClass("active");
     })
});
</script>

<script>
$(function() {
     var pgurl = window.location.href.substr(window.location.href
.lastIndexOf("/")+1);
     $("#servicenavi ul li a").each(function(){
          if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
          $(this).addClass("active");
     })
});
</script>
</head>
<!--Head Ends-->
<body>
<!--Main Wrapper Starts-->
<div class="mainwrapper">
<!--Header Start-->
<header class="mainheader marginb-1">
<div class="memberbar right">
	<nav class="members">
		<ul>
			<li><a href="index.php">Home</a></li> |   
			<li><a href="contact.php">Contact Us</a></li> |
			<li><a href="azindex.php">A - Z Index</a></li> |
			<li><a href="index.php">Student Login</a></li> |
			<li><a href="index.php">Staff Login</a></li> 
		</ul>
	</nav>
</div>
<?php require_once 'logo.php'; ?>



<?php require_once 'mainmenu.php'; ?>
</header>
<div class="container">
<!--Header Ends-->