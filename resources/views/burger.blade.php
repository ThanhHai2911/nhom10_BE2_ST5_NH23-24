@extends('app')
	@section('content')
	<div id="body">
		<div class="content">
			<div>
				<div>
					<h1>Burgers</h1>
					<div> <a href="burger"><img src="images/burger.jpg" width="434" height="288" alt=""></a> </div>
					<ul>
						<li>
							<h2><a href="burger">Burger Special</a></h2>
							<p>
								This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text.
							</p>
							<span class="price">$1</span>
						</li>
						<li>
							<h2><a href="burger">Veggie Burger</a></h2>
							<p>
								This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text.
							</p>
							<span class="price">99&cent;</span>
						</li>
						<li>
							<h2><a href="burger">Super Duper Burger</a></h2>
							<p>
								This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text.
							</p>
							<span class="price">$2</span>
						</li>
						<li class="last	">
							<h2><a href="burger">Kiddies Burger</a></h2>
							<p>
								A small burger with juicy beef patty, tomato, lettuce, bacon and cheese. Served with small fries and drink of your choice.
							</p>
							<span class="price">80&cent;</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="sidebar">
			<h1>Menu</h1>
			<ul class="navigation">
				<li class="first">
					<a class="active" href="burger">BURGERS</a>
				</li>
				<li>
					<a href="hotdog">HOTDOGS</a>
				</li>
				<li>
					<a href="shake">SHAKES</a>
				</li>
				<li>
					<a href="breakfast">BREAKFAST</a>
				</li>
			</ul>
			<a href="burger" class="download">&nbsp;</a> </div>
	</div>
	@endsection