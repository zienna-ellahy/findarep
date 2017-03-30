<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FAR - Home</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/custom.css">
</head>
<body>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

	<script>
		function openModal() {
		  document.getElementById('myModal').style.display = "block";
		}

		function closeModal() {
	  	document.getElementById('myModal').style.display = "none";
		}

		var slideIndex = 1;
		showSlides(slideIndex);

		function plusSlides(n) {
		  showSlides(slideIndex += n);
		}

		function currentSlide(n) {
		  showSlides(slideIndex = n);
		}

		function showSlides(n) {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("demo");
		  var captionText = document.getElementById("caption");
		  if (n > slides.length) {slideIndex = 1}
		  if (n < 1) {slideIndex = slides.length}
		  for (i = 0; i < slides.length; i++) {
		    slides[i].style.display = "none";
		  }
		  for (i = 0; i < dots.length; i++) {
		    dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";
		  dots[slideIndex-1].className += " active";
		  captionText.innerHTML = dots[slideIndex-1].alt;
		}
	</script>

	<div id="main_container">

		<div class="navbaar-static-top navbar-inverse fixed-nav-bar topnav">
		    <div class="container">
		      
		      <div class="navbar-brand">
		         <div id="logo" class="fixed-nav-bar">
		          <img src="images/logo.png" class="img-responsive" alt="logo">
		        </div>
		      </div>

		      <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
		        MENU

		        <!-- You can place image or text here -->
		      </button>

		      <div class="collapse navbar-collapse navHeaderCollapse menu-options menuitems">
		        <ul class="nav navbar-nav navbar-right">
		          <li><a href="#federal">Federal</a></li>
		          <li><a href="#state">State</a></li>
		          <li><a href="#local">Local</a></li>
		        </ul>
		      </div>

		    </div>
		 </div>
		
		<div id="search-container">
			
			<a href="#">
				<img src="images/search.jpg" alt="search">
			</a>

			<a href="#">
				<img src="images/petition.jpg" alt="search">
			</a>

			<a href="#">
				<img src="images/contact-us.jpg" alt="search">
			</a>

		</div>

		<div id="federal" class="container-fluid title">
	      federal
	    </div>

	    <div class="window">
		    <?php include('federal.php'); ?>
		</div>

	    <div id="state" class="container-fluid title">
	      state
	    </div>


	    <div class="window">
		    <?php include('state.php'); ?>
		</div>

	    <div id="local" class="container-fluid title">
	      local
	    </div>


	    <div class="window">
		    <?php include('local.php'); ?>
		</div>

	</div>

</body>
</html>