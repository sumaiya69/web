<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="http://localhost/style.css">
	<style type="text/css">
		
.log
{
	position: absolute;
	top: 50%;
	left: 72%;
	transform: translate(-50%,-50%);
	width: 650px;
	height: 600px;
	padding: 80px 40px;
	box-sizing: border-box;
	background:url(b.JPEG);
	background-size: cover;
}
.logi
{
	position: absolute;
	top: 70%;
	left: 50%;
	transform: translate(-50%,-50%);
	width: 420px;
	height: 300px;
	padding: 80px 40px;
	box-sizing: border-box;
	background: rgba(0,0,0,.5);
}

h1
{
	margin: 0;
	padding: 0 0 20px;
	color: black;
	text-align: center;
}

h3
{
	position: absolute;
	top: 85%;
	left: 3%;
	margin: 0;
	padding: 0 0 20px;
	color: black;
	text-align: center;
}

.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}


.btn {
	position: absolute;
	left: 65%;
	top: 67%;
    border: none;
    background-color:#ff99c2;
    padding: 20px 35px;
    font-size: 16px;
    cursor: pointer;
    display: inline-block;
}


.btn:hover {background: #eee;}

.success {color: red;}
#revel{ 

   width:600px; 
   height:700px; 
   background:white; 
   float:left;
}
#revell { 

   width:750px; 
   height:700px; 
   background: white; 
   float:left;
}
#r{
	position: absolute;
	width: 500px;
	height: 500px;
	left: 3%;
	top: 7%;
	background: url('by.JPEG');
	background-size: cover;
}
ul
{
	position: absolute;
	top: 15%;
	left: 12%;
	margin: 0;
	padding: 0 0 20px;
	color: black;
	font: white;
	
}

.rn
{
	position: absolute;
	top: 115%;
	left: 25%;
	width: 700px;
	height: 500px;
	box-sizing: border-box;
	background: #d9d9d9;
}


	</style>
</head>

<body>


<div id="revel">
<br>
<br>
<div id="r">
</div>
<br>
<h3 style="color: white">Fig : REVELL 1:20 Shelby</h3>
<br>
<br> 
</div>


<div id="revell">
	<div class="log">
<h2>BYD32 Die Cast Model</h2>
<div class="logi">
	<h1>Price:US $87.9</h1>
	<br>
	<br>
	<br>
	<button class="button" style="color: black"><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "rentnow.php")?"active":"";?>" href="rentnow.php">Rent Now</a></button>
	<button class="btn success"><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "types.php")?"active":"";?>" href="types.php">Later</a></button>
	
</div>
</div>
</div>

<div class="rn">
	<ul>
	<li>Invented By Rozariyo D Sumathiz</li>
	<br>
	<li style="color: blue">Manufactured By Chaina At First</li>
	<br>
	<li style="color: black" align="bold">180 youra($280)</li>
	<br>
	<li style="color: black" align="bold">Cool Stuff at Great Prices You want it. We have it.www.rollmodels.com</li>
	<br>
	<li style="color: black" align="bold">Shelby Trucks - In Stock Today - Ready for DeliveryKunes Country is one of the nation's largest dealers for ne used Shelbys.www.kunescountry.com</li>
	<br>
	<li style="color: black" align="bold">First run at california</li>
	<br>
	<li style="color: black" align="bold">180 youraToy Hobby Store in Miami - Largest Store in South FloridaModel Trains($280)</li>
	<br>
	<li style="color: black" align="bold">First run at california</li>
	</ul>
	<br>

	
</div>
</body>
</html>