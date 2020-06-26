<?php
include('server.php');
?>
<!DOCTYPE html>
<html lang ="en">
<head>
	<meta charset="utf-8">
	
	<title>Rent My Car</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/style.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">


#foot{
  width: 100%;
  height: 100px;
  background: #ffe6f3;
  background-size: cover;
}

	*{
		margin: 0px;
		padding: 0px;
	}
	#image{
		position: relative;
		z-index: -1;
	}
#content {
	height: 500px;
	width:100%;
	margin-top: -10px;
	background-color: #999966;
	position: relative;
	z-index: 1;
}

.fa {
  padding: 30px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 8px 4px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

.fa-snapchat-ghost {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

.fa-skype {
  background: #00aff0;
  color: white;
}

.fa-android {
  background: #a4c639;
  color: white;
}

.fa-dribbble {
  background: #ea4c89;
  color: white;
}

.fa-vimeo {
  background: #45bbff;
  color: white;
}

.fa-tumblr {
  background: #2c4762;
  color: white;
}

.fa-vine {
  background: #00b489;
  color: white;
}

.fa-foursquare {
  background: #45bbff;
  color: white;
}

.fa-stumbleupon {
  background: #eb4924;
  color: white;
}

.fa-flickr {
  background: #f40083;
  color: white;
}

.fa-yahoo {
  background: #430297;
  color: white;
}

.fa-soundcloud {
  background: #ff5500;
  color: white;
}

.fa-reddit {
  background: #ff5700;
  color: white;
}

.fa-rss {
  background: #ff6600;
  color: white;
}

#what
{
  position: absolute;
  top: 55%;
  left: 30%;
  transform: translate(-50%,-50%);
  width: 650px;
  height: 550px;
  padding: 80px 40px;
  box-sizing: border-box;
  background: white;
}

hr {
    display: block;
    height: 2px;
    border: 0;
    border-top: 3px solid #660000;
    margin: 1em 0;
    padding: 0;
}

</style>
	
</head>
<body>

<script type="text/javascript">
  var ypos,image;
  function parallex()
  {
    ypos = window.pageYOffset;
    image = document.getElementById('image');
    image.style.top = ypos *.4 + 'px';

  }
  window.addEventListener('scroll',parallex);
</script>

<div id = "main">
  <div id="what">
    <h1 style="color: black; font-style: italic;">What about Us??</h1>
  <hr>
  <h2 style="color: #33001a;font-style: italic;">What to Know about car renting ??? </h2>
  <h3 style="color: black">Keep these things in mind as you start your search for a rental car.</h3>
<br>
<h2 style="color: #660000; font-style: italic;">Debit and Credit Card Blocking ????</h2>
<br>
<h4 style="color: black; font-style: italic;">Comparing advertised rates for rental cars may not give you an accurate picture of the price you will pay. Try to make an “apples to apples” comparison of car rental prices that includes all mandatory fees and charges, as well as charges for options.Some fees may be quoted when you reserve a car online, though you may not find out about all of the charges until you go to the rental office to pick up your car. Read your contract carefully, and look for fees triggered by specific events — like accidents.</h4>
<h2 style="color: #000033;font-style: italic;">Your Driving Record Is More Important?</h2>
<h4 style="color: black;font-style: italic;">Many companies check driving records when customers arrive at the counter, and reject those whose records don't meet company standards.</h4>

  </div>
<nav>
<img src="mun.PNG" width="200" height="80">
	
<ul>
	<li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "car.php")?"active":"";?>" href="car.php">Home</a></li>
	<li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "contact.php")?"active":"";?>"  href="contact.php">Contact</a></li>
	<li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "about.php")?"active":"";?>"  href="about.php">About Car Rent</a></li>
	<li><a  class="<?php echo (basename($_SERVER['PHP_SELF']) == "news.php")?"active":"";?>" href="news.php">News Feedback</a></li>
	<li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "types.php")?"active":"";?>"  href="types.php">Car Stocks</a></li>

</ul>
</nav>
</div>

<div class = "loginbox">
	<img src="imu.PNG" width="100" height="100"  class="user">
	<h2>Log Car-Id in here</h2>
	<form method="post" action="car.php">
<?php
include('errors.php');
?>

		<p>Username</p>
		<input type="text" name="username" value="" placeholder="Enter Username">
		<p>Password</p>
		<input type="password" name="password" value="" placeholder="******">
		<input type="submit" name="submit" class="btn" value="Sign In">
		<p>
			Not yet user?<a href="register.php">Sign up</a>
		</p>
		
	</form>
	  
</div>


<img id="image" src = "bob.JPEG" height="810px" width="100%">
<div id="content">


<a href="https://www.facebook.com/" class="fa fa-facebook"></a>
<a href="https://www.twitter.com/" class="fa fa-twitter"></a>
<a href="https://www.google.com/" class="fa fa-google"></a>
<a href="https://www.linkedin.com/" class="fa fa-linkedin"></a>
<a href="https://www.youtube.com/" class="fa fa-youtube"></a>
<a href="https://www.instagram.com/" class="fa fa-instagram"></a>
<a href="https://www.google.com/" class="fa fa-pinterest"></a>
<a href="https://www.google.com/" class="fa fa-snapchat-ghost"></a>
<a href="https://www.google.com/" class="fa fa-skype"></a>
<a href="https://www.google.com/" class="fa fa-android"></a>
<a href="https://www.google.com/" class="fa fa-dribbble"></a>
<a href="https://www.google.com/" class="fa fa-vimeo"></a>
<a href="https://www.google.com/" class="fa fa-tumblr"></a>
<a href="https://www.google.com/" class="fa fa-vine"></a>
<a href="https://www.google.com/" class="fa fa-foursquare"></a>
<a href="https://www.google.com/" class="fa fa-stumbleupon"></a>
<a href="https://www.google.com/" class="fa fa-flickr"></a>
<a href="https://www.google.com/" class="fa fa-yahoo"></a>
<a href="https://www.google.com/" class="fa fa-reddit"></a>
<a href="https://www.google.com/" class="fa fa-rss"></a>

 </div>

<h1 id="foot" align="center" ><?php echo "All CopyRights Reserved by sumaiya0069@gmail.com";?></h1>

</body>
</html>