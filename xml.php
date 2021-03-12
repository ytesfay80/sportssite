<?php
$xmlFile = 'https://api.pinnaclesports.com/v1/leagues?sportid=3';

$xml = simplexml_load_file($xmlFile);
print_r($xmlFile)

//foreach ($xml->document as $doc) {
//echo 'Name:' . $doc->from . '';
//}
?>


<?php
      foreach ($xml->document as $doc) { ?>
      <h1>Hello:<?php echo $doc->from; ?></h1>
      <?php } ?>
      
     
