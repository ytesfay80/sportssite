<?php
ob_start();
require 'classLogin.php';
require 'original_values.php';
session_start();


$classLogin = new Login;
$classLogin->isUserLoggedIn();
if (!isset($_SESSION['user_name'])) {
header("Location: lottery.php");
}

?>
<!DOCTYPE html>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="css/vendor/bootstrap/bootstrap.css">

    <!-- Glyphicons -->
    <link rel="stylesheet" href="css/vendor/glyphicons/glyphicons.css">

    <!-- Grove Styles (switch for different color schemes, e.g. "styles-cleanblue.css") -->
    <link rel="stylesheet" href="css/styles-blue4.css" id="grove-styles">
    
        <link rel="stylesheet" href="css/style.css" id="grove-styles">
        
        
        
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery/jquery-1.9.1.min.js"><\/script>')</script>
    <!-- jQuery with jQuery Easing, and jQuery Transit JS -->
    <script src="js/vendor/layerslider/jquery-easing-1.3.js" type="text/javascript"></script>
    <script src="js/vendor/layerslider/jquery-transit-modified.js" type="text/javascript"></script>
     
    <!-- LayerSlider from Kreatura Media with Transitions -->
    <script src="js/vendor/layerslider/layerslider.transitions.js" type="text/javascript"></script>
    <script src="js/vendor/layerslider/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>

    <!-- Grove Layerslider initiation script -->
    <script src="js/grove-slider.js" type="text/javascript"></script>

   



<title>LottoShop </title>
</head>


<body>
<?php include 'includeheader.php'; ?>
 <div class="wrapper">
</div>
<h1> <?php $classLogin->transactions(); ?> </h1>
<?php $me2 = $classLogin->transactions(); ?> 

          <?php foreach ($me2 as $key => $value) { ?>
<table class="table table-bordered ">
<thead>
<th>Date</th>
<th>Ticket ID</th>
<th>Result</th>
</thead>
<tr>
<td><?php echo $key; ?></td>
<td><?php echo $value['member_id']; ?></td>
<td><?php   echo $value['ticket_result']; ?> </td>
</tr>
</table>
<?php } ?>
<p> <?php var_dump ($me2); ?> </p>

<div class="push">
</div>

<?php include 'includefooter.php'; ?>


 <script src="js/vendor/bootstrap/bootstrap.min.js"></script>
    <script src="js/vendor/modernizr/modernizr.js"></script>
  
</body>
</html>
