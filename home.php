<?php 
// if the user is not signed in dont use signed in header
// when not signed in the profile icon allows the user to Login/Register
// when Logged in the profile icon allows the the user to view their profile page
// I want the user to still be able to browze the website while not signed in
// thats why I left categories dropbox
// if(isset($_POST['submitLogin']))
// { include 'header.php';}
// else {include 'headerNoSignUp.php';} 


/*a session needs to start for signed in users*/
// if (isset($_SESSION['buyer_id'])) { 
//   if(isset($_SESSION['buyer_id'] == 1)) {
//     echo "You are logged in as buyer #1";
//     include 'header.php';
//   }
// } // end of first if

include 'header.php'; /* For demo purposes im keeping the logged in user Header, otherwise the login/logout Headers would be different*/

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="includes/slider.css">
	<link rel="stylesheet" type="text/css" href="includes/style.css">
	<title>Welcome To Ebuy</title>
</head>
<body>
	<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <a href="home.php"><img height="400" width="800" src="https://cdn.britannica.com/67/19367-050-885866B4/Valley-Taurus-Mountains-Turkey.jpg" style="width:100%"></a>
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="img2.jpg" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="img3.jpg" style="width:100%">
    <div class="text">Caption Three</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

											<!-- Java Script -->
<script type="text/javascript">var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
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
}</script>   
											<!-- end Java script  -->
<style type="text/css">
	
</style>
	
</body>
<?php include 'footer.php'?>