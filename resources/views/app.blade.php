<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<head>
	<title>Retro Diner</title>
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
					<a class="active" href="{{url('index')}}">Home</a>
				</li>
				<li>
					<a href="{{url('about')}}">About</a>
				</li>
				<li>
					<a href="{{url('burger')}}">Menu</a>
				</li>
				<li>
					<a href="{{url('contact')}}">Contact</a>
				</li>
				<li>
					<a href="{{url('blog')}}">Blog</a>
				</li>
			</ul>
		</div>
	</div>
	@yield('content')
	
	<div id="footer">
		<div>
			<ul>
				
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