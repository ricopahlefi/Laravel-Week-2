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
			<h1>Sign Up</h1>
			<form>
				<input placeholder="Full Name" type="text">
				<input placeholder="Example@gmail.com" type="email" />
				<input placeholder="Password" type="password" />
				<input placeholder="Confirm Password" type="password" />
				<button formaction="{{url('/')}}">SIGN UP</button>
			</form>
			<p>Already Haven't Account?<a class="forget" href="{{url('/login')}}">Login</a></p>
		</div>
	</section>
</body>
</html>