@extends('layOut.master')
@section('title')
BIS Search
@endsection
@section('samenav')
<!--<link rel="stylesheet" type="text/css" href="{{asset('css/Bislogin.css')}}">-->
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
<!--<style>
table,td{
	text-align: center;
	margin-left: 380px;
	
	border: 1px solid#7DB3FD;
	text-align: center;
	font-size: 10;
	padding: 10px;
	color: black;
}
tr{
	border: 1px solid#7DB3FD;
}
</style>-->
<!--<link rel="stylesheet" type="text/css" href="{{asset('css/BIS add.css')}}">-->
<script type="text/javascript" src="{{asset('js/paidedit.js')}}"></script>
<script type="text/javascript" src="{{asset('js/RadioClear.js')}}"></script>

<div class="page-header">
	<h3 style="color:#7DB3FD;" title="store customer informations"> SEARCH Customer History</h3>
	<h title="Please fill the field"> <i>Fill The <span class="glyphicon glyphicon-star"></span> Required Field.</i> </h><br></br>
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
				aria-describedby="basic-addon" type="text" name="customerid" placeholder="Customer NAME or ID" onkeyup="lettersOnly(this)" ><br></br>
			<input type="submit" name="search" class="button" value="Search INFO"><br></br>
	</div>
</form>
<table class="table table-hover">
	<thead>
		<tr>
		
			<th style="text-align: center">Customer ID</th><br>
			<th style="text-align: center">Customer Name</th>
			<th style="text-align: center">Date</th>
			<th style="text-align: center">Description</th>
			<th style="text-align: center">Paid</th>
			<th style="text-align: center">Dues</th>
			<th style="text-align: center">Options</th>
		</tr>
	</thead>	
	<br></br>
	<tbody>
	<tr class="info">
		@foreach($searcheddata as $data)
			<td>{{$data->C_ID}}</td><br>
			<td>{{$data->C_name}}</td>
			<td>{{$data->Date}}</td>
			<td>{{$data->Description}}</td>
			<td>{{$data->Paid}}</td>
			<td>{{$data->Dues}}</td>
			<td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter"><a style="color: white;text-decoration: none;">Edit</a> </button></td>
			<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h4 style="color:#7DB3FD;" title="edit customer informations"> UPDATE Customer History</h4>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			    <form class="navbar-form" method="post" action="/edit">
			      	<div class="modal-body">
			        
			        	<div class="form-group">
				      		<input type="hidden" name="_token"  value="{{csrf_token()}}">
						    <input type="number" name="cid" class="form-control input-lg hidden" aria-describedby="basic-addon" value="{{ $data->C_ID }}"><br></br>
						    Customer Name:<input type="text" name="cname" class="form-control input-lg" aria-describedby="basic-addon" value="{{ $data->C_name }}"><br></br>
						    Date:<input type="date" name="date" class="form-control input-lg" aria-describedby="basic-addon" value="{{ $data->Date }}"><br></br>
						    Description:<textarea class="form-control input-lg" aria-describedby="basic-addon" name="description" rows="3"> {{ $data->Description }} </textarea><br></br>
						    Paid:<input type="number" name="paid" class="form-control input-lg" aria-describedby="basic-addon" value="{{ $data->Paid }}"><br></br>
						    <label><strong>+</strong></label> <input type="radio" name="value" value="plus" id="plusCheck" onclick="plusminusCheck();">
						    <label><strong>-</strong></label> <input type="radio" name="value" value="minus" id="minusCheck" onclick="plusminusCheck();">
						    <!--<input type="button" value="Reset" onclick="Clear();">-->
						    <div style="visibility: hidden;">
						    	<input type="number" name="plusvalue" id="ifPlus" placeholder="Value For Addition">
						    	<input type="number" name="minusvalue" id="ifMinus" placeholder="Value For Subtraction">
						    </div>
						    Dues:<input type="number" name="dues" class="form-control input-lg" aria-describedby="basic-addon" value="{{ $data->Dues }}"><br></br>
						    <input type="submit" name="editinfo" class="button" value="EDIT INFO">
					    </div>
			      	</div>
			    </form>
			    </div>
			  </div>
			</div>
		
		@endforeach
		
	</tr>
	</tbody>
	<br>
</table>

@endsection