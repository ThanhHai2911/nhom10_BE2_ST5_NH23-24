@extends('app')
	@section('content')
	<div id="body">
		<div class="content">
			<div>
				<div>
					<h1>Breakfast</h1>
					<div> <a href="breakfast"><img src="images/breakfast2.jpg" width="484" height="271" alt=""></a> </div>
					<ul>
						<li>
							<h2><a href="breakfast">Strawberry Waffle</a></h2>
							<p>
								This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text.
							</p>
							<span class="price">$2</span>
						</li>
						<li>
							<h2><a href="breakfast">Bacon and Eggs</a></h2>
							<p>
								This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text.
							</p>
							<span class="price">$3</span>
						</li>
						<li>
							<h2><a href="breakfast">French Toast With Eggs</a></h2>
							<p>
								This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text.
							</p>
							<span class="price">$1</span>
						</li>
						<li class="last	">
							<h2><a href="breakfast">Bacon and Pancakes</a></h2>
							<p>
								A small burger with juicy beef patty, tomato, lettuce, bacon and cheese. Served with small fries and drink of your choice.
							</p>
							<span class="price">$2</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
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
	@endsection