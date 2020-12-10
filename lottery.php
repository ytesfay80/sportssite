<?php
ob_start();
require 'classLogin.php';
session_start();


$classLogin = new Login;
$classLogin->isUserLoggedIn();

$current_time = date('Hi');

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
<p>
</p>
 <div class="wrapper">
 

<br><br><br>

    <div class="container">
    
<div class="btn-group" style="position:absolute; top: 85px;">
    <a class="btn btn-lg btn-success active" href="#" role="button">Pick 3</a>
    <a class="btn btn-lg btn-success" href="#" role="button">Pick 4</a>
        </div>
        <form>
   <!--<input type="text" name="pick" class="form-control-new form-control" placeholder="3 Digit Number e.g., 123,098" /> -->
  <!-- <button type="submit" name="play" class="playsub btn btn-default btn-success">Submit</button> -->
   </form>
    <h1 style="text-align: center; color: #034DAC;">Midday Drawing</h1>
    
    
    

   
<table class="table table-striped">

     <tr>
    <td>
    <form action="myaccount.php" method="post">
    <?php $CA_time = 1550;
    $midnight = 2359;
    ?>
<input type="checkbox" name="checkbox[]" disabled> CA <?php if (($current_time > $CA_time) && ($current_time < $midnight)) {echo "OFFLINE";  } else { echo "3:55pm"; } ?> </input>
    </td>  
    <td>
<input type="checkbox" name="checkbox[]" value="TX"> TX 7 hours from now</input>
    </td>
       <td>
<input type="checkbox" name="checkbox[]" value="NM"> NM 7 hours from now</input>
    </td>
       <td>
<input type="checkbox" name="checkbox[]" value="IL"> IL 7 hours from now</input>
    </td>
          <td>
<input type="checkbox" name="checkbox[]" value="AL"> AL 7 hours from now</input>
    </td>
          <td>
<input type="checkbox" name="checkbox[]" value="SC"> SC 10:55pm</input>


    </td>
    
    </tr>

    

    </table>
       <input type="submit" name="rust" class="playsub btn btn-default btn-success" value="Sub"></button>

    </form>
        <h1 style="text-align: center; color: #034DAC;">Evening Drawing</h1>
        

    <table class="table table-striped">

     <tr>
    <td>
    <form>
<input type="checkbox" name="check">CA 11:45am</input>
</form>
    </td>  
    <td>
     <form>
<input type="checkbox" name="check">TX 1:30pm</input>
</form>
    </td>
       <td>
     <form>
<input type="checkbox" name="check">NM 12:30pm</input>
</form>
    </td>
       <td>
     <form>
<input type="checkbox" name="check">IL 2:44pm</input>
</form>
    </td>
          <td>
     <form>
<input type="checkbox" name="check">AL 1:30pm</input>
</form>
    </td>
          <td>
     <form>
<input type="checkbox" name="check">SC 10:55pm</input>
</form>
    </td>
    
    </tr>

    
    </table>
   
   <form action="lottery.php" method="post">
   <input type="text" name="pick" class="form-control-new form-control" placeholder="3 Digit Number e.g., 123,098" />
   <button type="submit" name="play" class="playsub btn btn-default btn-success">Submit</button>
   </form>
      
	</div>
	<br><br><br>
	


  
	</div>
    <div class="push">
    
<?php include 'includefooter.php'; ?>


 <script src="js/vendor/bootstrap/bootstrap.min.js"></script>
    <script src="js/vendor/modernizr/modernizr.js"></script>
    <!--This script will allow you to click inside of login dropdown box without it being x'd out -->
    <script language="javascript">
    $('.dropdown-toggle').dropdown();
    $('.dropdown-menu').find('form').click(function (e) {
        e.stopPropagation();
      });
      
</script>
</body>
</html>