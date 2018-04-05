@extends('layOut.master')
@section('title')
Home
@endsection
@section('samenav')
<html>
<center>
	<!--<script type="text/javascript">
		$(document).ready(function () {
        var idleState = false;
        var idleTimer = null;
        $('*').bind('mousemove click mouseup mousedown keydown keypress keyup submit change mouseenter scroll resize dblclick', function () {
            clearTimeout(idleTimer);
            if (idleState == true) { 
                $("body").css('background-color','#fff');            
            }
            idleState = false;
            idleTimer = setTimeout(function () { 
                $("body").css('background-color','#000');
                idleState = true; }, 2000);
        });
        $("body").trigger("mousemove");
    });

	</script>-->
</center>
<body>
	<?php  
		
		//echo $_SESSION['pass'];
		if (isset($_SESSION["name"])) {
			# code...
			if ((time()-$_SESSION['last_login_timestamp'])>60) {
				# code...
				header("location:logout.blade.php");
			} else {
				# code...
			}
			
		} else {
			# code...
			header("location:signin.blade.php");
		}
		
	?>

<!--<link rel="stylesheet" type="text/css" href="{{asset('css/Bislogin.css')}}">-->
<style type="text/css">
	.nav nav-tabs{
		margin-right: 300px;
		text-align: center;
	}
</style>
<div class="container">
<div class="page-header">
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
<li role="presentation"><a href="{{url('/About')}}" title="description about this system"><span class="glyphicon glyphicon-info-sign"></span> About </a></li>
<!--<li><a href="#logout" style="pointer-events: none; cursor: default; opacity: 0.5" title="LOGOUT">Logout</a></li>-->
</ul></div></div></div>
</body>
</html>
@endsection
@section('samecontent')
<html>
<body>
<div class="container">
<div class="panel panel-info"">
	<div class="panel-heading">
		<h4>Store Customer Details</h4></div>
<!--<link rel="stylesheet" type="text/css" href="{{asset('css/Home.css')}}">-->
	<p>The system will provide to you - The chance of storing your customer informations. You can store the customer 
		<strong>name, descriptions, date, paid, dues</strong> as a <b>vendor</b>.
	When your informations are capable to save then the system will give you a 
<strong>customer id</strong>. The given id will be helpful for your further operations in future.
</p></div><br></br>
<div class="embed-responsive embed-responsive-16by9">
<object  class="embed-responsive-item" width="300" height="250" data="https://www.youtube.com/embed/3SJf1Ibnblc" frameborder="0" allowfullscreen></object><br></br>
</div>
<br></br>
<!--<div>
<table class="table table-hover">
<thead>
<tr>
<td><h3>ADD INFO</h3></td>
<td><h3>UPDATE INFO</h3></td>
<td><h3>DELETE INFO</h3></td>
</tr></thead>
<tr>
<td><p>Store the customer history by providing the required data about your customers. 
Add the customer history to reduce the complexity about owe to your institution.</p></td>
<td><p>Update the customer history when you need to edit the customer informations.
You will able to edit each and every specific information which one you added before.</p></td>
<td><p>Delete the customer history forever. If you think that you need to close a customer history, you will able to do that anytime.</p></td>
</tr>
</table>
</div>-->
<div class="row">
  <div class=" col-md-4">
    <div class="thumbnail">
      <img src="{{asset('../image/addinfo.jpg')}}" alt="add information">
      <div class="caption">
        <h3>ADD INFO</h3>
        <p>Store the customer history by providing the required data about your customers. 
			Add the customer history to reduce the complexity about owe to your institution.</p>
      </div>
    </div>
  </div>
    <div class=" col-md-4">
    <div class="thumbnail">
      <img src="{{asset('../image/updateinfo.jpg')}}" alt="add information">
      <div class="caption">
        <h3>UPDATE INFO</h3>
        <p>Update the customer history when you need to edit the customer informations.
You will able to edit each and every specific information which one you added before.</p>
      </div>
    </div>
  </div>
    <div class=" col-md-4">
    <div class="thumbnail">
      <img src="{{asset('../image/deleteinfo.jpg')}}" alt="add information">
      <div class="caption">
        <h3>DELETE INFO</h3>
        <p>Delete the customer history forever. If you think that you need to close a customer history, you will able to do that anytime.</p>
      </div>
    </div>
  </div>
</div>
<div class="panel">
<!--<h5 style="float: right">Find us on</h5>-->

<a href="https://www.facebook.com/daffodilvarsity.edu.bd/" target="_blank"><i class="fa fa-facebook-official" style="font-size:36px;color:blue;float: right"></i></a>
<a href="https://plus.google.com/105546314720824695960" target="_blank"><i class="fa fa-google-plus-square" style="font-size:36px;color:#d34836;float: right"></i></a>
<a href="https://www.youtube.com/channel/UCWMRCkq8NlBrq4QDQ7_Y-5w" target="_blank"><i class="fa fa-youtube-square" style="font-size:36px;color:red;float: right"></i></a>
</div>
<div class="panel"><script type="text/javascript" src="//widget.supercounters.com/ssl/hit.js"></script><script type="text/javascript">sc_hit(1467865,4,8);</script><br><noscript><a href="http://www.supercounters.com">free Hit Counter</a></noscript>
	</div>
</body>
</html>
@endsection