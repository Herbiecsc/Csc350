<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
			.header {
				margin-top: -22px;
				height:130px;
				/*border: solid;
				border-color: #C2C3C4;
				background-color: #ffffff;
				padding-top: 20px;
				padding-left: 50px;
				padding-right:50px;*/
			}

			.ebuyImg {
				position: absolute;
				top: 0.8%;
				left: 3%;
			}

			.categoryHeader {
				position: absolute;
				top: 7%;
				left: 50%;
				background-color: #66CC33;
				border-radius:  20px;
				padding: 13px;
			}

			<style>
/* Style The Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}


.dropdown {
  position: absolute; 
  top: 7%;
				left: 90%;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  top: 100%;
	left: -20%;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #3366CC}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}

					
			</style>
	<header width="100"class="header">
			
			<div>
		<a href="#">
				<img src="EbuyLogo1.jpg" alt="Ebuy" width="150" class="ebuyImg">
		</a>
		<input class="inputHeader" type="text" name="search" placeholder="Search Anything" class="searchBarHeader">
		<a href="profilePage.php"><img src="img/profileIcon.png" class="profileIconHeader">
		</a>
		<a href="#"><img src="img/shopcart.png" class="shopcartHeader" height="30"></a>
	</div>
	
  <span class="dropdown">
  <span class="dropbtn"><img src="navigation.png"></span>
  <span class="dropdown-content">
    <a href="#" style="color:#66CC33">Deals</a>
    <a href="#"style="color:#66CC33">Starr Items</a>
    <a href="#"style="color:#66CC33">About Us</a>
    <a href="#"style="color:#66CC33">Contact Us</a>
    <form action="includes/logout.php" method="POST"><a href="#" name="SubmitLogout" style="color: #66CC33">Logout</a></form>
  </span>
</span>	
		

	
		<!-- CATEGORY -->
		<select class="categoryHeader">Categories
			<option><a href="#">Categories</a></option>
			<option><a href="#">Clothes</a></option>
			<option><a href="#">Home Decor</a></option>
			<option><a href="#">Technology</a></option>
			<option><a href="#">Camping</a></option>

			

		</select>
	
	</header>
	<hr>


	
</head>


<body>
	