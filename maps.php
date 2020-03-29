<?php
session_start();
?>

<!doctype html>

<html class="">

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="keywords" content="New to EFT? Well you've come to the right website!">

<title>Welcome to NewToEFT.com</title>

<link href="css/boilerplate.css" rel="stylesheet" type="text/css">

<link href="css/responsive.css" rel="stylesheet" type="text/css">

<link href="css/styles.css" rel="stylesheet" type="text/css">

<link rel='icon' href='images/favicon.ico' type='image/x-icon'/ >

</head>

<body>

<!--Container starts here-->

<div class="gridContainer clearfix"> 

<!--Top section here-->

<?php
include 'php/header.php>';
?>

<!--Top section ends here-->

<!--rimary Container starts here-->

<article class="fluid textContainer">
</article>
<article class="fluid gallery">
<h2 class="fluid showAreaH2 headingStyle">Current Maps:</h2>

<figure class="fluid tiles zeroMargin_desktop zeroMargin_tablet"> <img id="rollover1" src="images/reserve.png" alt=""/>

<figcaption class="textStyle"></figcaption>

</figure>

<figure class="fluid tiles"> <img id="rollover2" src="images/Map.png" alt=""/>

<figcaption class="textStyle"></figcaption>

</figure>

<figure class="fluid tiles  zeroMargin_tablet"> <img id="rollover3" src="images/factory.jpg" alt=""/>

<figcaption class="textStyle"></figcaption>

</figure>
</article>

<!--Primary content area ends here--> 

<!--Footer starts here-->

<footer class="fluid footer">
<section class="fluid secondarySection">
<p class="contentArea">Copyright © 2020 NewToEFT™</p>
</section>
</footer>

<!--Footer ends here--> 

</div>

<!--Container ends here-->

</body>
</html>

