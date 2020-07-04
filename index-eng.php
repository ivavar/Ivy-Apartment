<!DOCTYPE html>
<html>
  <head>
	<meta name="keywords" content="Split, Croatia, apartments, beach, joy, Sun, holidays, vacation" />
    <meta charset="utf-8"/>
    <title>Ivy Apartments</title>
	<link rel="stylesheet" href="styles/font-awesome.min.css"/>
	<link rel="stylesheet" href="styles/styles.css"/>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  </head>
  
  <body>
	<header>
		<div id="title-container">
            <h1>Ivy Apartments</h1>
        </div>
		<nav>
			<a href="index.php"> <img src="images/cro.png" style="width:40px;height:38px;"></a>
			<a href="index-eng.php"> <img src="images/gb.png" style="width:40px;height:40px;"></a>
			<a href="index.php"> Home </a>
			<a href="http://www.split.hr/Default.aspx" target="_blank"> Split </a>
			<a href="mailto:user@gmail.com"> Contact </a>
			<button id="login-logout-button"></button>
		</nav>	  
	</header>
	
	<main>
		<!-- Container for the image gallery -->
		<div class="slider-container">
			<h2> Ivy Apartment 1 </h2>

		  <!-- Full-width images with number text -->
		  <div class="mySlides">
			<div class="numbertext">1 / 8</div>
			  <img src="images/slika1.jpg" style="width:80%">
		  </div>

		  <div class="mySlides">
			<div class="numbertext">2 / 8</div>
			  <img src="images/slika2.jpg" style="width:80%">
		  </div>

		  <div class="mySlides">
			<div class="numbertext">3 / 8</div>
			  <img src="images/slika4.jpg" style="width:80%">
		  </div>

		  <div class="mySlides">
			<div class="numbertext">4 / 8</div>
			  <img src="images/slika5.jpg" style="width:80%">
		  </div>

		  <div class="mySlides">
			<div class="numbertext">5 / 8</div>
			  <img src="images/slika6.jpg" style="width:80%">
		  </div>
		  
		  <div class="mySlides">
			<div class="numbertext">6 / 8</div>
			  <img src="images/slika7.jpg" style="width:80%">
		  </div>
		  
		  <div class="mySlides">
			<div class="numbertext">7 / 8</div>
			  <img src="images/slika8.jpg" style="width:80%">
		  </div>
		  
		  <div class="mySlides">
			<div class="numbertext">8 / 8</div>
			  <img src="images/slika9.jpg" style="width:80%">
		  </div>

		  <!-- Next and previous buttons -->
		  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		  <a class="next" onclick="plusSlides(1)">&#10095;</a>
			
			
		  <!-- Image text 
		  <div class="caption-container">
			<p id="caption"></p>
		  </div>-->

		  <!-- Thumbnail images -->
		  <div class="row">
			<div class="column">
			  <img class="demo cursor" src="images/slika1.jpg" style="width:100%" onclick="currentSlide(1)">
			</div>
			<div class="column"> 
			  <img class="demo cursor" src="images/slika2.jpg" style="width:100%" onclick="currentSlide(2)">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/slika4.jpg" style="width:100%" onclick="currentSlide(3)">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/slika5.jpg" style="width:100%" onclick="currentSlide(4)">
			</div> 
			<div class="column">
			  <img class="demo cursor" src="images/slika6.jpg" style="width:100%" onclick="currentSlide(5)">
			 </div>
			<div class="column">
			  <img class="demo cursor" src="images/slika7.jpg" style="width:100%" onclick="currentSlide(6)">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/slika8.jpg" style="width:100%" onclick="currentSlide(7)">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/slika9.jpg" style="width:100%" onclick="currentSlide(8)">
			</div>
		  </div>
		</div>
		<div class="description-address-container">
			<div class="description"><hr>
				<h3>Description</h3>
				<span class="edit-button">Edit<i class="fa fa-pencil"></i></span>
				It is distant only 10 minutes walking from the main bus station, ferry port and the train station, Bacvice beach and 5 minutes from the Old Town and Riva. There is 10 square meters terrace where you can relax and enjoy the Sun without going to the beach.Studio apartment is situated on the fourth floor.<br><br> 
				-wide window allows natural light to enter and makes the apartment very light <br>
				-free Wi-Fi<br>
				-free washing machine<br>
				-free air conditioning<br>
				-no charge for house cleaning<br>
				-5-10 min on foot from the main city destinations (Bačvice beach, old town, ferry port, main bus station, main train station)
			</div>
		
		  <div class="address"><hr>
				<h3>Location</h3>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d23148.883613903305!2d16.44307937033173!3d43.51046137872087!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13355e06c2b45ebb%3A0x53a2694b173d9932!2sUl.+Tolstojeva+10%2C+21000%2C+Split!5e0!3m2!1sen!2shr!4v1527197056612" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>						
		  </div>
		</div>  
		
	</main>
	
	<footer> All rights reserved - Iva </footer>
	
	<div id="login-overlay">
		<div class="login-box">
			<form autocomplete="on">
				<label for="email">Email:</label><br/>			
				<input type="text" id="email"/><br/>
				<label for="password">Password:</label><br/>
				<input type="password" id="password"/><br/>
			</form>
			<button id="login-button">Login</button>
			<i class="fa fa-close close-button"></i>
			<p class="message"></p>
		 </div>
	</div>
		
	<script src="scripts/vendor/jquery-3.1.1.min.js"></script>
	<script src="scripts/vendor/mustache.min.js"></script>
	<script src="scripts/Slider.js"></script>
	<script src="scripts/Login.js"></script>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  </body>
</html>