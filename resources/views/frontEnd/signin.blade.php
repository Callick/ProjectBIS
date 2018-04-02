
@extends('layOut.master')
@section('title')
BIS Signin
@endsection
@section('samecontent')
	<?php
		session_start();
		if (isset($_POST["login"])) {
			# code...
			$_SESSION["name"]=$_POST["username"];
			$_SESSION['last_login_timestamp']=time();
			header("location:Home.blade.php");
		}
	?>
	<!--<link rel="stylesheet" type="text/css" href="{{asset('css/BISlogin.css')}}">-->
	<!--<div class="center" style="background: url('{{ asset('image/NRZITrZ.jpg') }}')">-->
		<div class="container">
<div class="page-header">
	<!--<h1 title="BIS" style="color:#196F3D"> Billing Information System </h1>-->
	<h title="Please fill the 2 fields"> <i>Fill The <span class="glyphicon glyphicon-star"></span> Required Field.</i> </h><br></br>
</div>
<div class="container">
		<?php  
			
			session_destroy();  
		?>
		@if(session()->has('message6'))
			<div class="row">
				<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				{{ session()->get('message6') }}
				</div>	
			</div>
		@endif
	
</div>
<form class="navbar-form" action="/signin" method="post">
	<div class="form-group">
		<input type="hidden" name="_token"  value="{{csrf_token()}}">
		<h3>Login</h3>
		<span class="glyphicon glyphicon-star"></span> <input type="text" class="form-control input-lg" name="username" aria-describedby="basic-addon1" placeholder="E-mail" size="20" autofocus required><br></br>
		<span class="glyphicon glyphicon-star"></span> <input type="password" class="form-control input-lg" name="password" aria-describedby="basic-addon2" placeholder="Password" size="20" autofocus required><br> </br>
<!--<a href=""><sub>Forgot Password ?</sub></a><br></br>-->
		<input type="submit"  name="login" class="button" value="Sign In"></a>
		<a href="{{url('/signup')}}" title="create account for newcomers"> <sub>Sign Up</sub> </a>
</div>
</form></div>
@endsection