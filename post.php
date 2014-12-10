	<<!DOCTYPE html>
	<html  lang="en" class="no-js">
	<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  	<link rel="stylesheet"  media="screen and (min-width: 0px)" href="css/small.css">
    <link rel="stylesheet"  media="screen and (min-width: 1000px)" href="css/medium.css">
    <link rel="stylesheet"  media="screen and (min-width: 1400px)" href="css/large.css">
    <meta name="viewport" content="width=device-width, initial-scale1.0">
    <style media="screen">
    body { font: 20px/1.5 'Ubuntu Condensed', sans-serif; color: black; }
    code { color: black; font-family: 'Ubuntu Condensed', sans-serif;}
    a { color: #178DB1; }
    .container { margin: 0 auto; max-width: 960px; }
    #info + .readmore-js-toggle { padding-bottom: 1.5em; border-bottom: 1px solid #999; font-weight: bold;}
    #demo { padding: 0 10%; }
  </style>
	</head>
	<body>
    
<?php

	require_once(__DIR__ . "/view/header.php");//requires the header at the top of the page
	require_once(__DIR__ . "/view/form.php");//requires the form file
	require_once(__DIR__ . "/view/footer.php");//requires the footer
 ?>
 
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.1.1/jquery.min.js"></script>

 <script src="readmore.js"></script>

 <script>
  $('#info').readmore({
    moreLink: '<a href="#">More examples and options</a>',
    maxHeight: 390,
    afterToggle: function(trigger, element, expanded) {
      if(! expanded) { // The "Close" link was clicked
        $('html, body').animate( { scrollTop: element.offset().top }, {duration: 100 } );
      }
    }
  });
    $('article').readmore({maxHeight: 240});
  </script>
 	</body>
	</html>