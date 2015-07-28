<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$doc = new DOMDocument('1.0', 'UTF-8');
// load the string into the DOM (this is your page's HTML), see below for more info
$doc->loadHTMLFile ('http://voat.co/v/dogecoin/new');

// since we are working with HTML fragments here, remove <!DOCTYPE 
$doc->removeChild($doc->firstChild);            

// remove <html></html> and any junk
$body = $doc->getElementsByTagName('body'); 
$doc->replaceChild($body->item(0), $doc->firstChild);

// now, you can get any portion of the html (target a div, for example) using familiar DOM methods

// echo the HTML (or desired portion thereof)
die($doc->saveHTML());
?>
</body>
</html>