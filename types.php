<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="http://localhost/style.css">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<h1 align="center" height="80" width = "100%" style="background-color:#ff9900; font-style: italic;" ><?php echo "Our Available Cars";?>

</h1>

<div id="jjhg">

 <table >
  <tr>
    <th width="40%">Car</th>
    <th width="30%">Made-IN</th>
    <th width="30%">Cost</th>
  </tr>
  <tr>
    <td><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "revell.php")?"active":"";?>" href="revell.php">Revell 1:24 Shelby Mustang GT350h</a></td>
    <td>Germany</td>
    <td>$110</td>
  </tr>
  <tr>
    <td><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "alfa.php")?"active":"";?>" href="alfa.php">Alfa Romeo GTF4</a></td>
    <td>UK</td>
    <td>$176.9</td>
  </tr>
    <tr>
    <td><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "mits.php")?"active":"";?>" href="mits.php">Mitsubishi</a></td>
    <td>Japan</td>
    <td>$76.0</td>
  </tr>
    <tr>
    <td><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "rolls.php")?"active":"";?>" href="rolls.php">Rolls Royce67USA</a></td>
    <td>USA</td>
    <td>$266.9</td>
  </tr>
    <tr>
    <td><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "suba.php")?"active":"";?>" href="suba.php">SubaruJK</a></td>
    <td>Japan</td>
    <td>$66.9</td>
  </tr>
    <tr>
    <td><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "pero.php")?"active":"";?>" href="pero.php">Perodua</a></td>
    <td>Malaysia</td>
    <td>$78.0</td>
  </tr>  
    <tr>
    <td><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "uri.php")?"active":"";?>" href="uri.php">Uri-Automobile</a></td>
    <td>Namibia</td>
    <td>$98.9</td>
  </tr>
     <tr>
    <td><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "merci.php")?"active":"";?>" href="merci.php">Mercedes-Benz</a></td>
    <td>Germany</td>
    <td>$261.5</td>
  </tr>
     <tr>
    <td><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "opel.php")?"active":"";?>" href="opel.php">Opel</a></td>
    <td>Germany</td>
    <td>$66.9</td>
  </tr>
    <tr>
    <td><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "crs.php")?"active":"";?>" href="crs.php">Cross Lander</a></td>
    <td>Brazil</td>
    <td>$98.5</td>
  </tr>
      <tr>
    <td><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "bian.php")?"active":"";?>" href="bian.php">Bianco</a></td>
    <td>Brazil</td>
    <td>$26.9</td>
  </tr>
      <tr>
    <td><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "acad.php")?"active":"";?>" href="acad.php">Acadian</a></td>
    <td>Canada</td>
    <td>$78.9</td>
  </tr>
     <tr>
    <td><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "byd.php")?"active":"";?>" href="byd.php">BYD</a></td>
    <td>Chaina</td>
    <td>$87.9</td>
  </tr>
     <tr>
    <td><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "az.php")?"active":"";?>" href="az.php">AzSamand</a></td>
    <td>Azerbaijan</td>
    <td>$266.9</td>
  </tr>
     <tr>
    <td><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "brch.php")?"active":"";?>" href="brch.php">Birchfield</a></td>
    <td>Australia</td>
    <td>$266.9</td>
  </tr>
     <tr>
    <td><a class="<?php echo (basename($_SERVER['PHP_SELF']) == "bmw.php")?"active":"";?>" href="bmw.php">BMW</a></td>
    <td>Germany</td>
    <td>$166.9</td>
  </tr>

</table> 
</div>
</body>
</html>