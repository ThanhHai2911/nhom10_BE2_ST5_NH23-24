<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<head>
	<title>Breakfast Menu - Retro Diner</title>
	<meta charset="utf-8">
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="header">
		<div>
			<a href="index"><img class="logo" src="images/logo.png" width="513" height="84" alt="" title=""></a>
			<a href="index"><img  src="images/waitress.png" width="332" height="205" alt="" title=""></a>
			<ul class="navigation">
				<li>
					<a href="index">Home</a>
				</li>
				<li>
					<a href="about">About</a>
				</li>
				<li>
					<a class="active" href="burger">Menu</a>
				</li>
				<li>
					<a href="contact">Contact</a>
				</li>
				<li>
					<a href="blog">Blog</a>
				</li>
			</ul>
		</div>
	</div>
	@yield('content1')
		<div class="sidebar">
			<h1>Menu</h1>
			<ul class="navigation">
				<li class="first">
					<a href="burger">BURGERS</a>
				</li>
				<li>
					<a href="hotdog">HOTDOGS</a>
				</li>
				<li>
					<a href="shake">SHAKES</a>
				</li>
				<li>
					<a class="active" href="breakfast">BREAKFAST</a>
				</li>
			</ul>
			<a href="breakfast" class="download">&nbsp;</a> </div>
	</div>
	<div id="footer">
		<div>
			<ul>
				<li class="first">
					<h2>Delivery Hotline</h2>
					<h3>Call 0-123-456-789</h3>
					<ul>
						<li>
							<a href="http://www.freewebsitetemplates.com/go/facebook" class="facebook"></a>
						</li>
						<li>
							<a href="http://www.freewebsitetemplates.com/go/twitter" class="twitter"></a>
						</li>
						<li>
							<a href="http://www.freewebsitetemplates.com/go/googleplus" class="googleplus"></a>
						</li>
					</ul>
				</li>
				<li>
					<a href="index"><img class="logo" src="images/logo-footer.png" alt=""></a>
					<ul class="navigation">
						<li>
							<a href="index">Home</a>
						</li>
						<li>
							<a href="about">About Us</a>
						</li>
						<li>
							<a href="menu">Menu</a>
						</li>
						<li>
							<a href="contact">Contact Us</a>
						</li>
					</ul>
					<span>&copy; 2023 RetroDiner.com. All Rights Reserved</span>
				</li>
				<li class="last">
					<h2>Follow Us By Email</h2>
					<form action="index">
						<input type="text" name="subscribe" value="Enter Your Email Here...">
						<input type="submit" value="">
					</form>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>