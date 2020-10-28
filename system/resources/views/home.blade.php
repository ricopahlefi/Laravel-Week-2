<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta content="IE-edge" http-equiv="X-UA-Compatible"/>
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	<title>Disini Jual Kopi.</title>
	<link rel="stylesheet" href="{{url('public')}}/css/home.css">
	<link href="{{url('public')}}/img/favicon.png" rel="shortcut icon"/>
	<script crossorigin="anonymous" src="https://kit.fontawesome.com/70a642cd7c.js"></script>
</head>
<body>
	<section class="main">
		<div class="logo">
			<img src="{{url('public')}}/img/favicon.png" style="width: 20px;height: 20px;">
			<a href="{{url('/')}}"><font>KO</font>PI</a>
		</div>
		<div class="side-box">
			<div class="search">
				<i class="fas fa-search"></i>
				<input placeholder="Search" type="text" />
			</div>	
		</div>
    	<div class="m-img">
    		<img alt="" src="{{url('public')}}/img/paket.jpg" style="width: 70%;height: 250px;" />    
    	</div>
		<div class="m-text">
			<h1>Ba<font>ris</font>ta</h1>
			<h2>Pack<font>age</font></h2>
			<a class="m-btn" href="#">Lihat Detail</a>
		</div>
		<div class="social">
			<a href="{{ url('login') }}"><i class="fas fa-user"></i></a>
			<a href="{{url('admin')}}"><i class="fas fa-user-tie"></i>Admin</a>
		</div>
	</section>

	<section class="product">
		<div class="p-heading">
			<h3>Alat <font>Kopi </font><i class="fas fa-arrow-circle-right"></i></h3>
		</div>
		<div class="product-container">
			<div class="p-box">
				<img alt="1" src="{{url('public')}}/img/1.jpg" />
				<p>Grinder</p>
				<a class="price" href="#">$30.3</a>
				<a class="buy-btn" href="{{url('/fullview')}}">Preview</a>
			</div>
			<div class="p-box">
				<img alt="2" src="{{url('public')}}/img/2.jpg" />
				<p>Hand Grinder</p>
				<a class="price" href="#">$44.3</a>
				<a class="buy-btn" href="#">Preview</a>
				</div>
			<div class="p-box">
				<img alt="3" src="{{url('public')}}/img/3.jpg" />
				<p>Flair Espresso</p>
				<a class="price" href="#">$53.3</a>
				<a class="buy-btn" href="#">Preview</a>
				</div>
			<div class="p-box">
				<img alt="4" src="{{url('public')}}/img/4.jpg" />
				<p>Vietnam Drip</p>
				<a class="price" href="#">$33.3</a>
				<a class="buy-btn" href="#">Preview</a>
			</div>
			<div class="p-box">
				<img alt="5" src="{{url('public')}}/img/5.jpg" />
				<p>Mokapot</p>
				<a class="price" href="#">$11.3</a>
				<a class="buy-btn" href="#">Preview</a>
			</div>
			<div class="p-box">
				<img alt="6" src="{{url('public')}}/img/6.jpg" />
				<p>Kettle</p>
				<a class="price" href="#">$43.3</a>
				<a class="buy-btn" href="{{url('/fullview')}}">Preview</a>
			</div>
		</div>
	</section>

	<section class="our-brand">
	<div class="brand-text">
		<h3>Bali Kintamani</h3>
		<h4>Kopi dari Petani <font>Terbaik</font> </h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus similique, veniam libero fuga, error natus ipsum excepturi quae est suscipit facilis dicta ipsam rerum assumenda, debitis odit? Perferendis commodi quas animi, iusto voluptatem laudantium assumenda deleniti rem praesentium doloribus cupiditate error unde aut corrupti dolorum at veniam dolore eum. Voluptatibus!</p>
	</div>
	<div class="brand-img"><img src="{{url('public')}}/img/brand.jpg" /></div>
	</section>
	<section class="product">
	<div class="p-heading">
		<h3><font>Biji</font> Kopi <i class="fas fa-arrow-circle-right"></i></h3>
	</div>
	<div class="product-container">
		<div class="p-box">
		<img alt="1" src="{{url('public')}}/img/7.jpg" style="width: 150px;" />
		<p>Bali Kintamani</p>
		<a class="price" href="#">$8.2</a>
		<a class="buy-btn" href="#">Preview</a>
		</div>
		<div class="p-box">
			<img alt="2" src="{{url('public')}}/img/8.jpg" style="width: 150px;" />
			<p>Toraja Sapan</p>
			<a class="price" href="#">$8.3</a>
			<a class="buy-btn" href="#">Preview</a>
			</div>
		<div class="p-box">
			<img alt="3" src="{{url('public')}}/img/9.jpg" style="width: 150px;" />
			<p>Aceh Gayo</p>
			<a class="price" href="#">$10.1</a>
			<a class="buy-btn" href="#">Preview</a>
			</div>
		<div class="p-box">
			<img alt="4" src="{{url('public')}}/img/10.jpg" style="width: 150px;" />
			<p>Papua Baliem</p>
			<a class="price" href="#">$8.1</a>
			<a class="buy-btn" href="#">Preview</a>
			</div>
		<div class="p-box">
			<img alt="5" src="{{url('public')}}/img/11.jpg" style="width: 150px;" />
			<p>Halu</p>
			<a class="price" href="#">$9.7</a>
			<a class="buy-btn" href="#">Preview</a>
			</div>
		<div class="p-box">
			<img alt="6" src="{{url('public')}}/img/12.jpg" style="width: 150px;" />
			<p>Mandailing</p>
			<a class="price" href="#">$8.3</a>
			<a class="buy-btn" href="#">Preview</a>
			</div>
		</div>
		
	</section>
	<section class="subcribe-container">
		<h3>Berlangganan Kopi?</h3>
		<div class="subcribe-input">
			<input placeholder="Example@gmail.com" type="email" />
			<a class="subcribe-btn" href="#">Send</a>
		</div>
	</section>
	<footer>
		<h3>Catalog</h3>
		<ul class="footer-menu">
			<li><a href="#">Espresso Maker</a></li>
			<li><a href="#">Whole Bean</a></li>
			<li><a href="#">Manual Brew</a></li>
			<li><a href="#">Accessories</a></li>
		</ul>
	</footer>
<a class="copyright" href="#">&#169; Copyright 2020. Shop by Kopi Bang</a>
</body>
</html>