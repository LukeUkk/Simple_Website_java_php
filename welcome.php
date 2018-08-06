<?php
   include('session.php');
?>

<html lang="en">
<head>
<meta charset="utf-8">
	<title>Personal portal</title>
<link href="style_style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="style_container_wrapper">
	<div class="style_spacer"></div>
<div id="style_container" align="center">
  <div id="style_header">
      <div id="inner_header">
        <div id="style_site_title">My Personal portal</div>
      </div>
  </div>
 <div id="style_left_column">
 	<div class="text_area" align="justify">
<div class="post_title">Welcome <?php echo $login_session; ?></div>
	</div>
 </div>
	
      <div id="style_left_column">
 		<div class="text_area" align="justify">
<div class="post_title">Youtube Gate</div>
Click on the youtube image to go to the website <br />
<a href="https://www.youtube.com/"><img src="images/YouTube.jpg" title="Youtube.jpg" width="300" height="200" /></a>
		<div class="section_box2" align="justify">
        <div class="post_title">Google maps</div>
         <div class="text_area">

          </div>
      	</div>
        
        <div class="section_box2" align="justify">
        	<iframe
				width="500"
				height="450"
				frameborder="0" style="border:0"
				src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDj0LMxBCbhYS-9jlJp11xU-75o8M5Es9A
				&q=Space+Needle,Seattle+WA" allowfullscreen>
			</iframe>
        <div class="text_area">

        
   	      <br />
        <div class="publish_date">Post Date: 24-10-2020 · Tags: <a href="#">Flash</a> · <a href="#">ActionScripts</a> · <a href="#">Full Story</a></div>
          </div>
      	</div>
       
        </div>
      </div>
    
    	<div id="style_right_column">
			<h2><a href = "logout.php">Sign Out</a></h2>
           
            <ul class="style_menu">
              <li><a href="welcome.php">Homepage</a></li>
			</ul>
<!-- Here is the code that was genarated by googles custom search engine that I use in my site -->		  
		  <script>
  (function() {
    var cx = '008303183941454096133:hw-ndfdmqfo';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
		</script>
		<gcse:search></gcse:search>
<!-- this is the twitter code i used to display my colleges twitter feed  --!>                                                                                          -->		
        <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/NorthLindsey" data-widget-id="715921631542190080">Tweets by @NorthLindsey</a>  <!-- I got this code for twitters website that lets you create a wigit for twitter to add to your websites -->
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

		</div>

	<div id="style_footer">
    Copyright © 2048 Luke Hardcastle·
    </div>
        
</div>
<div class="style_spacer"></div>
</div>
</body>
</html>