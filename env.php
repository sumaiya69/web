<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="http://localhost/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">

h2 {
  font: 400 40px/1.5 Helvetica, Verdana, sans-serif;
  margin: 0;
  padding: 0;
}

#adrss
{
	width: 100%;
	height: 900px;
	background: url('lv.JPEG');
	background-size: cover;
}
.ad
{
	position: absolute;
	top: 65%;
	left: 50%;
	transform: translate(-50%,-50%);
	width:500px;
	height: 550px;
	padding: 80px 40px;
	box-sizing: border-box;
	background: rgba(0,0,0,.5);
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}
 
li {
  font: 200 20px/1.5 Helvetica, Verdana, sans-serif;
  border-bottom: 1px solid #ccc;
}
 
li:last-child {
  border: none;
}
 
li a {
  text-decoration: none;
  color: #000;
  display: block;
  width: 400px;
 
  -webkit-transition: font-size 0.3s ease, background-color 0.3s ease;
  -moz-transition: font-size 0.3s ease, background-color 0.3s ease;
  -o-transition: font-size 0.3s ease, background-color 0.3s ease;
  -ms-transition: font-size 0.3s ease, background-color 0.3s ease;
  transition: font-size 0.3s ease, background-color 0.3s ease;
}
 
li a:hover {
  font-size: 30px;
  background: #f6f6f6;
}

	</style>
</head>

<body>


<div id="adrss">
	<div class="ad">
 <h2>Messages</h2>		
  <ul>
    <li><a href="#">Inbox<i class="fa fa-envelope"></i></a></li>
    <li><a href="#">Outbox<i class="fa fa-envelope"></i></a></li>
    <li><a href="#">Compose<i class="fa fa-envelope"></i></a></li>
    <li><a href="#">Sent Message<i class="fa fa-envelope"></i></a></li>
    <li><a href="#">Drafts<i class="fa fa-envelope"></i></a></li>
  </ul>

	</div>
</div>

<h1 align="center" height="80" width = "100%" style="background-color:#800000;" >
	<?php echo basename($_SERVER['PHP_SELF']);?>
 </h1>

</body>
</html>