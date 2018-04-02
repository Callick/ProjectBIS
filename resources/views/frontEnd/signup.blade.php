@extends('layOut.master')
@section('title')
SignUp
@endsection
@section('samecontent')


<div class="page-header">
	<h3 style="color:#7DB3FD;" title="store customer informations">Create Account For New Customer</h3>
	<h title="Please fill the 4 fields"> <i>Fill The <span class="glyphicon glyphicon-star"></span> Required Field.</i> </h><br></br>
</div>
<div class="container">
		<?php  
			session_start();
			session_destroy();  
		?>
		@if(session()->has('message7'))
			<div class="row">
				<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				{{ session()->get('message7') }}
				</div>	
			</div>
		@endif
	
</div>
<form class="navbar-form" action="/signup" method="post">
	<div class="form-group">
		<span class="glyphicon glyphicon-star"></span><input class="form-control input-lg"
		aria-describedby="basic-addon" type="text" name="firstname" placeholder="User Name" size="20" required><br></br>
		<span class="glyphicon glyphicon-star"></span><input class="form-control input-lg"
		aria-describedby="basic-addon" type="E-mail" name="email" placeholder="E_mail" required><br></br>
		<span class="glyphicon glyphicon-star"></span>+880<input class="form-control input-lg"
		aria-describedby="basic-addon" type="number" name="phone" placeholder="Mobile Number" size="15" required><br></br>
		<input type="hidden" name="_token"  value="{{csrf_token()}}">
		<span class="glyphicon glyphicon-star"></span><input class="form-control input-lg"
		aria-describedby="basic-addon" type="password" name="userpass" placeholder="Password" size="15" required><br></br>
		<span class="glyphicon glyphicon-star"></span><input class="form-control input-lg"
		aria-describedby="basic-addon" type="password" name="userpass2" placeholder="Confirm Password" size="15" required><br></br>
		<span class="glyphicon glyphicon-star"></span><input class="form-control input-lg"
		aria-describedby="basic-addon" type="date" name="date" max="2080-01-01" placeholder="DOB" required><br></br>
		<!--<span class="glyphicon glyphicon-star"></span><input class="form-control input-sm"
		aria-describedby="basic-addon" type="radio" name="gender" value="male">Male 
		<input class="form-control input-sm"
		aria-describedby="basic-addon" type="radio" name="gender" value="female" required>Female<br></br>-->
		<span class="glyphicon glyphicon-star"></span><input class="form-control input-lg"
		aria-describedby="basic-addon" type="file" name="imageup" accept="image/*" required><br></br>
		<!--<span class="glyphicon glyphicon-star"></span>
		<textarea class="form-control input-lg"
		aria-describedby="basic-addon" name="address" maxlength="200" rows="5" placeholder="Address" required>	</textarea><br></br>-->
		<span class="glyphicon glyphicon-star"></span><select class="form-control input-lg"
		aria-describedby="basic-addon" name="Religion" style="border-radius: 10px" required>
		<option value="">---select religion---</option>
		<option value="Muslim">Muslim</option>
		<option value="Hindu">Hindu</option>
		<option value="Christian">Christian</option>
		<option value="Buddhism">Buddhism</option>
		</select><br></br>
		<!--<span class="glyphicon glyphicon-star"></span><input class="form-control input-sm"
		aria-describedby="basic-addon" type="checkbox" name="CheckBox" required> I agree with terms & conditions<br></br>-->
		<input type="submit" name="submit" class="button" value="Register">
	</div>
</form> 


@endsection