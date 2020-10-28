<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Disini Jual Kopi. | Sign Up</title>
	<link href="{{ url('public')}}/css/login.css" rel="stylesheet" type="text/css"/>
	<link href="{{url('public')}}/img/favicon.png" rel="shortcut icon"/>
</head>
<body>
	<div class="logo">
			<img src="{{url('public')}}/img/favicon.png" style="width: 20px;height: 20px;">
			<a href="{{url('/')}}"><font>KO</font>PI</a>
	</div>
	<section class="login-container">
		<div class="login-inputs">
			<h1>Admin</h1>
			<form>
				<input placeholder="Username" type="text">
				<input placeholder="Password" type="password" />
				<button formaction="{{url('beranda')}}">Login</button>
			</form>
		</div>
	</section>
</body>
</html>