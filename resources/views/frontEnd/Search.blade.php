@extends('layOut.master')
@section('title')
BIS Search
@endsection
@section('samenav')
<style type="text/css">
	.nav nav-tabs{
		margin-right: 300px;
		text-align: center;
	}
</style>
<div class="nav">
<ul class="nav nav-tabs" style="margin-left: 50px;padding: 20px">

<li role="presentation"><a href="{{url('/Home')}}" title="home page"><span class="glyphicon glyphicon-home"></span>Home</a></li>
<li role="presentation"><a style="pointer-events: none;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="" title="choose your wishes">Options<span class="caret"></span></a>
<ul class="dropdown-menu"><!-- next 3lines are hoverable dropdown items-->
<li><a href="{{url('/BIS_add')}}" title="store customer informations" ><span class="glyphicon glyphicon-plus-sign"></span> ADD INFO </a></li>
<!--<li><a href="#edit info" title="update customer informations" ><span class="glyphicon glyphicon-edit"></span> EDIT INFO </a></li>-->
<li><a href="{{url('/BIS_delete')}}" title="delete customer informations" ><span class="glyphicon glyphicon-minus-sign"></span> DELETE INFO </a></li>
</ul></li>
<li role="presentation"><a href="{{url('/search')}}" title="search customer details" ><span class="glyphicon glyphicon-search"></span>Search </a>
<li role="presentation"><a href="{{url('/profile')}}" title="contact us"><span class="glyphicon glyphicon-globe"></span>Info</a></li>
<li role="presentation"><a href="{{url('/About')}}" title="description about this system"><span class="glyphicon glyphicon-info-sign"></span> About </a></li></div>
@endsection

@section('samecontent')

	<div class="page-header">
				<!--<link rel="stylesheet" type="text/css" href="{{asset('css/BIS add.css')}}">-->
		<h3 style="color:#7DB3FD;" title="store customer informations"> SEARCH Customer History</h3>
		<h title="Please fill the field"> <i>Fill The <span class="glyphicon glyphicon-star"></span> Required Field.</i> </h><br></br>
	</div>
	<div class="container">
		<?php  
			session_start();
			//session_destroy();  
		?>
		@if(session()->has('message4'))
			<div class="row">
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					{{ session()->get('message4') }}
					
				</div>	
			</div>
		@endif
		@if(session()->has('editmessage'))
			<div class="row">
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						{{ session()->get('editmessage') }}
				</div>	
			</div>
		@endif
		@if(session()->has('editmessage1'))
			<div class="row">
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						{{ session()->get('editmessage1') }}
				</div>	
			</div>
		@endif
		<?php session_destroy(); ?>
	</div>
		<form class="navbar-form" action="/search" method="post">
			<div class="form-group">
				<script>
					function lettersOnly(input){
						var regex=/[^a-z 0-9]/gi;
						input.value=input.value.replace(regex,"");
					}
				</script>
				<input type="hidden" name="_token"  value="{{csrf_token()}}">
				<span class="glyphicon glyphicon-star"></span><input class="form-control input-lg"
				aria-describedby="basic-addon" type="text" name="customerid" onkeyup="lettersOnly(this)" placeholder="Customer NAME or ID" size=required><br></br>
				<input type="submit" name="search" class="button" value="Search INFO"><br></br>
			</div>	
	</form>
	
@endsection