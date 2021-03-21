<?php 
      $xml = simplexml_load_file("xml2.xml");
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Grove - Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="css/vendor/bootstrap/bootstrap.css">

    <!-- Glyphicons -->
    <link rel="stylesheet" href="css/vendor/glyphicons/glyphicons.css">

    <!-- Google Webfonts -->
    <link href='http://fonts.googleapis.com/css?family=Nunito:400,700' rel='stylesheet' type='text/css'>

    <!-- LayerSlider styles -->
    <link rel="stylesheet" href="css/vendor/layerslider/layerslider.css" type="text/css">

    <!-- Grove Styles (switch for different color schemes, e.g. "styles-cleanblue.css") -->
    <link rel="stylesheet" href="css/styles-blue4.css" id="grove-styles">

    <!--[if lt IE 9]>
        <link rel="stylesheet" href="css/ie8.css">        
        <script src="js/vendor/google/html5-3.6-respond-1.1.0.min.js"></script>
    <![endif]-->

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
   

    
</head> 
<body>
    <div>
  <ul class="nav nav-pills">
  
  
  <li class="dropdown active"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Basketball<b class="caret"></b></a>
    <ul class="dropdown-menu">
	<li><a href="#">NBA</a></li>
	<li><a href="#">Euroleague</a></li>
	<li><a href="#">China BaskAs</a></li>
        <li><a href="#">France ProA</a></li>
	<li><a href="#">NCAA Men's</a></li>
    </ul>
 
 <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" href="#">Soccer<b class="caret"></b></a>
  <ul class="dropdown-menu">
      <li><a href="#">Australia</a></li>
      <li><a href="#">2014 World Cup</a></li>
       <li><a href="#">MLS</a></li>
      <li><a href="#">Belgian</a></li>
  </ul>
  
   <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" href="#">Fighting<b class="caret"></b></a>
  <ul class="dropdown-menu">
      <li><a href="#">Mixed Martial Arts</a></li>
      <li><a href="#">Boxing</a></li>
  </ul>
  
  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" href="#">Badminton<b class="caret"></b></a>
  <ul class="dropdown-menu">
      <li><a href="#">All</a></li>
   
  </ul>
   
   <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" href="#">Rugby<b class="caret"></b></a>
  <ul class="dropdown-menu">
      <li><a href="#">Australia</a></li>
      <li><a href="#">2 Hand Touch</a></li>
  </ul>
 
  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" href="#">Cricket<b class="caret"></b></a>
  <ul class="dropdown-menu">
      <li><a href="#">Indian</a></li>
      <li><a href="#">Backyard</a></li>
  </ul>
  
   <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" href="#">Tennis<b class="caret"></b></a>
  <ul class="dropdown-menu">
      <li><a href="#">Wimbledon</a></li>
      <li><a href="#">US Open</a></li>
  </ul>
  
   
   <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" href="#">Props<b class="caret"></b></a>
  <ul class="dropdown-menu">
      <li><a href="#">Basketball</a></li>
      <li><a href="#">Soccer</a></li>
      <li><a href="#">Tennis</a></li>
      <li><a href="#">Fighting</a></li>
      


  </ul>
  
  
  </ul>
  <br>
  <br>

  <div class="container table-responsive">
<table class="table table-bordered table-striped table-hover">
   <thead>
    <tr> 
        <th class="col-xs-1">Start Time</th>
	<th class="col-xs-1">Sport/League</th>
	<th class="col-xs-2">Participant(s)</th>
	<th class="col-xs-3"><abbr title="The amount of points a team must win by or the maximum number of points a team can lose by.">Spread</th>
	<th class="col-xs-3"><abbr title="The total number of points, rounds, sets, or runs scored in an event.">Totals</th>
	<th class="col-xs-3"><abbr title="Money Line - The outright winner of an event">ML</th>
    </tr>
    </thead>
      
      <?php foreach ($xml->event as $feed) { ?>

  <tr>
  <!--Start Time -->
    <td>
    <?php echo $feed->startDateTime ?>
    </td>  
     
     <!--Sport/League -->
   <td>
    Football/NFL
    </td>

      
    
      <!--Participants -->
    <td class="position">
   <?php echo $feed->awayTeam->name ?><br><br>vs<br><br><?php echo $feed->homeTeam->name ?>
    </td>
    
      <!--Spread -->
   <td>
  <select class="form-control-number">
  <option><?php echo $feed->periods->period->spreads->spread->awaySpread  ?> &nbsp;&nbsp;&nbsp; (<?php echo $feed->periods->period->spreads->spread->awayPrice  ?>)</option>
  <option>-7.5 &nbsp;&nbsp; (-105)</option>
  <option>-7 &nbsp;&nbsp; (-118)</option>
  </select><button type="submit" class="btn btn-danger btn-default btn-placebet">Add to Slip</button>
	<br><br><br>
  <select class="form-control-number">
 <option><?php echo $feed->periods->period->spreads->spread->homeSpread  ?> &nbsp;&nbsp;&nbsp; (<?php echo $feed->periods->period->spreads->spread->homePrice  ?>)</option>
  <option>+7.5 &nbsp;&nbsp;&nbsp; (-105)</option>
  <option>+7 &nbsp;&nbsp;&nbsp; (-118)</option>
  </select><button type="submit" class="btn btn-danger btn-default btn-placebet">Add to Slip</button>
    </td>
  
    <!--Totals -->
      <td>
  <select class="form-control-number">
<option>Over 46 &nbsp;&nbsp;&nbsp; (+175)</option>
  <option>Over 46.5 &nbsp;&nbsp;&nbsp; (-105)</option>
  <option>Over 47 &nbsp;&nbsp;&nbsp; (-118)</option>
  </select><button type="submit" class="btn btn-danger btn-default btn-placebet">Add to Slip</button>
	  <br><br><br>
    <select class="form-control-number">
<option>Under 46 &nbsp;&nbsp;&nbsp; (+126)</option>
  <option>Under 46.5 &nbsp;&nbsp;&nbsp; (-105)</option>
  <option>Under 47 &nbsp;&nbsp;&nbsp; (-118)</option>
  </select><button type="submit" class="btn btn-danger btn-default btn-placebet">Add to Slip</button>
    </td>
    
      <!--MoneyLine -->
     <td>
  <select class="form-control-number">
  <option>(-193)</option>
  </select><button type="submit" class="btn btn-danger btn-default btn-placebet">Add to Slip</button>
	  <br><br><br>
  <select class="form-control-number">
  <option>(+143)</option>
  </select><button type="submit" class="btn btn-danger btn-default btn-placebet">Add to Slip</button>
    </td>

   </tr>
</table>

</div>
  
  
  <div class="container table-responsive">
<table class="table table-bordered table-striped table-hover">
   <thead>
    <tr> 
        <th class="col-xs-1">Start Time</th>
        <th class="col-xs-1">Sport/League</th>
	<th class="col-xs-2">Participant(s)</th>
	<th class="col-xs-3"><abbr title="The amount of points a team must win by or the maximum number of points a team can lose by.">Spread</th>
	<th class="col-xs-3"><abbr title="The total number of points, rounds, sets, or runs scored in an event.">Totals</th>
	<th class="col-xs-3"><abbr title="Money Line - The outright winner of an event">ML</th>


    </tr>
    </thead>
 
 <tr>
     
     <!--Start Time -->
   <td>
    6:05pm PST
    </td>
    
      <!--Sport/League -->
    <td>
    Football/NFL
    </td>
  
    <!--Participants -->
   <td>
   New England Patriots<br><br>vs<br><br>Indianapolis Colts
    </td>
   
     <!--Spread -->
   <td>
  <select class="form-control-number">
  <option>-8 &nbsp;&nbsp;&nbsp; (+117)</option>
  <option>-7.5 &nbsp;&nbsp; (-105)</option>
  <option>-7 &nbsp;&nbsp; (-118)</option>
  </select><button type="submit" class="btn btn-danger btn-default btn-placebet">Add to Slip</button>
	<br><br><br>
  <select class="form-control-number">
 <option>-8 &nbsp;&nbsp;&nbsp; (+113)</option>
  <option>-7.5 &nbsp;&nbsp;&nbsp; (-105)</option>
  <option>-7 &nbsp;&nbsp;&nbsp; (-118)</option>
  </select><button type="submit" class="btn btn-danger btn-default btn-placebet">Add to Slip</button>
    </td>
      
        <!--Totals -->
      <td>
  <select class="form-control-number">
<option>Over 58 &nbsp;&nbsp;&nbsp; (+192)</option>
  <option>Over 57.5 &nbsp;&nbsp;&nbsp; (-105)</option>
  <option>Over 57 &nbsp;&nbsp;&nbsp; (-118)</option>
  </select><button type="submit" class="btn btn-danger btn-default btn-placebet">Add to Slip</button>
	  <br><br><br>
    <select class="form-control-number">
<option>Under 58 &nbsp;&nbsp;&nbsp; (+126)</option>
  <option>Under 57.5 &nbsp;&nbsp;&nbsp; (-105)</option>
  <option>Under 57 &nbsp;&nbsp;&nbsp; (-118)</option>
  </select><button type="submit" class="btn btn-danger btn-default btn-placebet">Add to Slip</button>
    </td>
     
       <!--MoneyLine -->
     <td>
  <select class="form-control-number">
  <option>(-351)</option>
 </select><button type="submit" class="btn btn-danger btn-default btn-placebet">Add to Slip</button>
	  <br><br><br>
   <select class="form-control-number">
  <option>(+237)</option>
 </select><button type="submit" class="btn btn-danger btn-default btn-placebet">Add to Slip</button>
    </td>

   </tr>
</table>
<?php } ?>


  
    <script src="js/vendor/bootstrap/bootstrap.min.js"></script>
    <script src="js/vendor/modernizr/modernizr.js"></script>
</body>
</html>