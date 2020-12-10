<?php
ob_start();
require 'classLogin.php';
require 'classRegister (copy).php';

session_start();


$classLogin = new Login;
$classLogin->isUserLoggedIn();
$classRegister = new Register;
 if (isset($_POST['submit'])) {
$classRegister->registerUser();
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
        <link rel="stylesheet" href="css/signin.css">

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
       <div class="container ex">
       <?php foreach ($classRegister->errors as $error) { ?>
      <ul>
      <li>
      <?php echo $error; ?>
      </li>
      </ul>
      <?php } ?>
      
      
       <?php foreach ($classRegister->messages as $message) { echo $message; } ?>

      
      <form class="form-signin" action="register.php" method="post" role="form">
        <h1 style="margin-left: 61px;">Sign Up Today!</h1>
        <hr />
        <br>
           <label style="font-size: 20px;" for="reg_username">Username</label>
        <input type="text" name="reg_username" class="form-control" id="dropdown_login" placeholder="Username" autofocus>
           <label style="font-size: 20px;" for="reg_password">Password</label>
        <input type="password" name="reg_password" id="dropdown_login" class="form-control" placeholder="Password" >
           <label style="font-size: 20px;" for="reg_password_repeat">Repeat Password</label>
         <input type="password" name="reg_password_repeat" id="dropdown_login" class="form-control" placeholder="Repeat Password" >

       <br>
        <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Create Your Account</button>
        <br>
        <h2>Have an Account Already? <a href="login.php" style="color: red;"><u><i>Sign In</i></u></a></h2>
      </form>
      </div>

    </div>
<div class="push">
</div>

<?php include 'includefooter.php'; ?>


 <script src="js/vendor/bootstrap/bootstrap.min.js"></script>
    <script src="js/vendor/modernizr/modernizr.js"></script>
  
</body>
</html>