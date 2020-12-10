<?php
$xmlFile = 'https://api.pinnaclesports.com/v1/leagues?sportid=3';

$xml = simplexml_load_file($xmlFile);
print_r($xmlFile)

//foreach ($xml->document as $doc) {
//echo 'Name:' . $doc->from . '';
//}
?>


new shit
<?php
      foreach ($xml->document as $doc) { ?>
      <h1>Hello:<?php echo $doc->from; ?></h1>
      <?php } ?>
      
      
      
      
      /* <?xml version="1.0" encoding="UTF-8"?> 
<documents>
  <document>
 <title>Forty What?</title>
 <from>Joe</from>
 <to>Jane</to>
 <body>I know that's the answer -- but what's the question?</body>
 </document>
</documents>
				*/