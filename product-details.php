<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<title>All Products - Octave Music Store</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
</head>
<body>



	<div class="container">
		<div class="navbar">
		<div class="logo">
			<a href="index.html"><img src="images/logo.png" width="125px"></a>
		</div>
		<nav>
			<ul id="MenuItems">
				<li><a href="index.html">Home</a></li>
				<li><a href="products.html">Products</a></li>
				<li><a href="">About</a></li>
				<li><a href="">Contact</a></li>
				<li><a href="account.html">Account</a></li>
			</ul>	
		</nav>
		<a href="cart.html"><img src="images/cart.png" width="30px" height="30px"></a>
		<img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
		</div>	
	</div>
<!---------------------------single product details----------------->

	<div class="small-container single-product">
		<div class="row">
			<div class="col-2">
				<img src="images/single-product-1.png" width="100%" id="productImg">

				<div class="small-img-row">
				<div class="small-img-col">
					<img src="images/single-product-1.png" width=100% class="small-img">
				</div>
				<div class="small-img-col">
					<img src="images/sheet.png" width=100% class="small-img">
				</div>
				<div class="small-img-col">
					<img src="images/cajon.png" width=100% class="small-img">
				</div>
				<div class="small-img-col">
					<img src="images/single-product-1.png" width=100% class="small-img">
				</div>
				</div>	
			</div>
			<div class="col-2">
				<p>Home / Red Guitar</p>
				<h1>Red Guitar by Yemaha</h1>
				<h4>Rs 2000</h4>
				<select>
					<option>Select Colour</option>
					<option>Red</option>
					<option>Green</option>
					<option>Blue</option>
				</select>
				<input type="number" value="1">
				<a href="cart.html?pid=<?php echo($pid); ?>" class="btn">Add To Cart</a>

				<h3>Product Details <i class="fa fa-indent"></i></h3>
				<br>
				<p>Details of the product.........</p>
			</div>	
		</div>
	</div>	


	<!--------------------title----------------------->
		<div class="small-container">
			<div class="row row-2">
				<h2>Related Products</h2>
				<p>View More</p>
			</div>
		</div>		

	<!--------------------------products----------------------->

	<div class="small-container">

		<div class="row">
			<div class="col-4">
				<img src="images/product-1.png" alt="">
				<h4>Red Guitar</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>Rs 2000.00</p>
			</div>
			<div class="col-4">
				<img src="images/product-1.png" alt="">
				<h4>Red Guitar</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>Rs 2000.00</p>
			</div>
			<div class="col-4">
				<img src="images/product-1.png" alt="">
				<h4>Red Guitar</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>Rs 2000.00</p>
			</div>
			<div class="col-4">
				<img src="images/product-1.png" alt="">
				<h4>Red Guitar</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>Rs 2000.00</p>
			</div>
		</div>	
		
	</div>


	

		
<!----------------footer---------------------->
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col-1">
					<h3> Download our App</h3>
					<p>Download App for Android</p>
					<div class="app-logo">
						<img src="images/logo-play-store.png">
					</div>	
				</div>
				<div class="footer-col-2">
					<img src="images/logo.png">
					<p>App benefits Android</p>
				</div>
				<div class="footer-col-3">
					<h3>Useful Links</h3>
					<ul>
						<li>Coupons</li>
						<li>Return Policy</li>
					</ul>
				</div>
				<div class="footer-col-3">
				<h3>Follow Us</h3>
					<ul>
						<li>Facebook</li>
						<li>Youtube</li>
						<li>Instagram</li>
					</ul>
				</div>
			</div>
			<hr>
			<p class="copyright">Copyright 2022 - Octave Music Store</p>	
		</div>
	</div>	
	<!----------------------js for toggle menu------------------->
	<script>
		var MenuItems = document.getElementById("MenuItems")

		MenuItems.style.maxHeight = "0px";

		function menutoggle(){
			if(MenuItems.style.maxHeight == "0px")
			{
				MenuItems.style.maxHeight = "200px"
			}
			else
			{
				MenuItems.style.maxHeight = "0px"
			}
		}
	</script>	
	<!----------------------js for product gallery------------------------>
	<script>
		var productImg = document.getElementById("productImg");
		var smallImg = document.getElementByClassName("small-img");

			smallImg[0].onclick = function(){
				productImg.src = smallImg[0].src;
			}
			smallImg[1].onclick = function(){
				productImg.src = smallImg[1].src;
			}
			smallImg[2].onclick = function(){
				productImg.src = smallImg[2].src;
			}
			smallImg[3].onclick = function(){
				productImg.src = smallImg[3].src;
			}
	</script>
</body>
</html>