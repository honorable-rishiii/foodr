<?php
include 'config.php';
session_start();
 
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}



?>



<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Foodr</title>
    <style>
	.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
   background: #555;
  color: #f1f1f1;
  position: inherit;
  top: 10px;
  left: 25%;
  z-index: 500;
  background-color: grey;
  padding: 8px;
  border: 1px solid #999;
  text-align: center;
  font-family: 'Roboto','sans-serif';
  line-height: 20px;
  padding-left: 55px;
}

/* Style the header links */
.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
  font-family: 'Roboto','sans-serif';
}

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

/* Change the background color on mouse-over */


/* Style the active/current link*/
.header a.active {
  background-color: dodgerblue;
  color: white;
}

/* Float the link section to the right */
.header-right {
  float: right;
}

/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */ 
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
    #panel {
   background: #555;
  color: #f1f1f1;
  position: inherit;
  top: 10px;
  left: 25%;
  z-index: 500;
  background-color: grey;
  padding: 8px;
  border: 1px solid #999;
  text-align: center;
  font-family: 'Roboto','sans-serif';
  line-height: 20px;
  padding-left: 55px;
}
      #map {
        height: 88%;
        top: 0px;
 
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>

 <div class="header">
 
 
 <a href="#default" class="logo">Foodr</a>
 <div class="header-right">
   <a  href="#home">
      <?php echo htmlspecialchars($_SESSION['username']); ?>
     </a>
   
     
     
   <a href="logout.php">Sign out</a>
 </div>
</div>

    <div id="map"></div>
    <script>
 
      function initMap() {
        var fab = {lat: 6.870849, lng: 79.886745};
        var sch = {lat: 6.870386, lng: 79.888468};
        var Ps = {lat: 6.868895699999999, lng: 79.8873039};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: fab
        });
 
        var contentStringfab = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading"><center>The Fab</h1>'+
			'<div id="wowslider-container0">'+
	'<div class="ws_images"><ul>'+
		'<li><img src="Slide show/data0/images/fabgroup2.jpg" alt="Since 1979" title="Since 1979" id="wows0_0"/></li>'+
		'<li><img src="Slide show/data0/images/images_1.jpg" alt="Delicious cakes" title="Delicious cakes" id="wows0_1"/></li>'+
		'<li><img src="Slide show/data0/images/formatfactorypastrycopy.jpg" alt="bootstrap slider" title="Short eats" id="wows0_2"/></a></li>'+
		'<li><img src="Slide show/data0/images/06050001.jpg" alt="Fresh foods" title="Fresh foods" id="wows0_3"/></li>'+
	'</ul></div>'+
	'<div class="ws_bullets"><div>'+
	'	<a href="#" title="Since 1979"><span><img src="Slide show/data0/tooltips/fabgroup2.jpg" alt="Since 1979"/>1</span></a>'+
	'	<a href="#" title="Delicious cakes"><span><img src="Slide show/data0/tooltips/images_1.jpg" alt="Delicious cakes"/>2</span></a>'+
	'<a href="#" title="Short eats"><span><img src="Slide show/data0/tooltips/formatfactorypastrycopy.jpg" alt="Short eats"/>3</span></a>'+
	'	<a href="#" title="Fresh foods"><span><img src="Slide show/data0/tooltips/06050001.jpg" alt="Fresh foods"/>4</span></a>'+
	'</div></div><div class="ws_script" style="position:absolute;left:-99%"></div>'+
	'<div class="ws_shadow"></div>'+
	'</div>'+
	
            
'<p><center><button class="button button2"><div id="left">Pasta</div><div id="right">Rs.85/=</div></button>'+
'<button class="button button2"><div id="left">Cake</div><div id="right">Rs.500/=</button>'+
'<button class="button button2"><div id="left">Rolls</div><div id="right">Rs.50/=</div></button>'+
'<button class="button button2"><div id="left">Pastries</div><div id="right">Rs.45/=</div></button>'+
            '</div>'+
            '</div>';
           
        var contentStringsch = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading">Shanthi Cream House</h1>'+
            '<div id="bodyContent">'+
            
'<p><center><button class="button button2"><div id="left">Pasta</div><div id="right">Rs.85/=</div></button>'+
'<button class="button button2"><div id="left">Cake</div><div id="right">Rs.250/=</button>'+
'<button class="button button2"><div id="left">Rolls</div><div id="right">Rs.50/=</div></button>'+
'<button class="button button2"><div id="left">Pastries</div><div id="right">Rs.45/=</div></button>'+
            '<button class="button button2"><div id="left">Chicken Bun</div><div id="right">Rs.70/=</div></button>'+
            '</div>'+
            '</div>';
			
		var contentStringPs = '<div id="content">'+
              '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading"><center>Perera and Sons</h1>'+
            '<div id="bodyContent">'+
              '<p><center><button class="button button2"><div id="left">Pasta</div><div id="right">Rs.85/=</div></button>'+
'<button class="button button2"><div id="left">Cake</div><div id="right">Rs.250/=</button>'+
'<button class="button button2"><div id="left">Rolls</div><div id="right">Rs.50/=</div></button>'+
'<button class="button button2"><div id="left">Pastries</div><div id="right">Rs.45/=</div></button>'+
            '<button class="button button2"><div id="left">Chicken Bun</di v><div id="right">Rs.70/=</div></button>'+
            '</div>'+
            '</div>';
 
        var infowindowfab = new google.maps.InfoWindow({
          content: contentStringfab
        });
 
        var infowindowsch = new google.maps.InfoWindow({
          content: contentStringsch
        });
		
         var infowindowPs =new google.maps.InfoWindow({
          content: contentStringPs
         });
 
        var markerfab = new google.maps.Marker({
          position: fab,
          map: map,
          title: 'fab'
        });
        markerfab.addListener('click', function() {
          infowindowfab.open(map, markerfab);
        });
        var markersch = new google.maps.Marker({
          position: sch,
          map: map,
          title: 'shanthi cream house'
        });
        markersch.addListener('click', function() {
          infowindowsch.open(map, markersch);
        });
		
          var  markerPs = new google.maps.Marker({
            position: Ps,
            map: map,
            title: 'Perera & Sons',
            icon: 'Pictures/Rest.png'
           });
          markerPs.addListener('click', function() {
              infowindowPs.open(map, markerPs);
          });
		  
		var slideIndex = 1;
			showDivs(slideIndex);
		}
				
		function plusDivs(n) {
		  showDivs(slideIndex += n);
		}
		
		
		function showDivs(n) {
		  var i;
		  var x = document.getElementsByClassName("mySlides");
		  if (n > x.length) {slideIndex = 1}    
		  if (n < 1) {slideIndex = x.length}
		  for (i = 0; i < x.length; i++) {
			 x[i].style.display = "none";  
		  }
		  x[slideIndex-1].style.display = "block";  
		}


    </script>
    <script async defer
   src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpJaIbH1Nu6_DkmqPAmKZwgsANAKGb2fg&callback=initMap">
    </script>
	
    <script type="text/javascript" src="Slide show/engine0/wowslider.js"></script>
	<script type="text/javascript" src="Slide show/engine0/script.js"></script>
  </body>
</html>