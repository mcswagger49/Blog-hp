<meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
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
