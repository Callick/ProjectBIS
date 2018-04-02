@extends('layOut.master')
@section('title')
User Profile
@endsection
<!--<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{asset('css/BISlogin.css')}}">
</head>
<body>-->
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
		<li><a href="#edit info" title="update customer informations" ><span class="glyphicon glyphicon-edit"></span> EDIT INFO </a></li>
		<li><a href="{{url('/BIS_delete')}}" title="delete customer informations" ><span class="glyphicon glyphicon-minus-sign"></span> DELETE INFO </a></li>
		</ul></li>
		<li role="presentation"><a href="{{url('/search')}}" title="search customer details" ><span class="glyphicon glyphicon-search"></span>Search </a>
		<li role="presentation"><a href="{{url('/profile')}}" title="contact us"><span class="glyphicon glyphicon-globe"></span>Info </a></li>
		<li role="presentation"><a href="{{url('/About')}}" title="description about this system"><span class="glyphicon glyphicon-info-sign"></span> About </a></li></div>
@endsection

@section('samecontent')
		<div class="container">
			<div class="page-header">
						<!--<link rel="stylesheet" type="text/css" href="{{asset('css/BIS add.css')}}">-->
				<h3 style="color:#7DB3FD;margin-left: 40px" title="your paye information">Overview</h3>
			</div><br></br>
			<div class=" col-md-3">
				<p title="paid amounts" style="color: green"><strong> Your Total Earnings : @if(session()->has('paid')) {{ session()->get('paid') }}tk @endif </strong></p>
				
				<p title="due amounts" style="color: red"><strong> Your Total Dues : @if(session()->has('dues')) {{ session()->get('dues') }}tk @endif </strong></p>

<br></br>
			</div>
			<div>
				
				<table class="table table-hover table-stripped" >
					<thead>
						<tr>
							<th style="text-align: center">Customer ID</th><br>
							<th style="text-align: center">Customer Name</th>
							<th style="text-align: center">Date</th>
							<th style="text-align: center">Description</th>
							<th style="text-align: center">Paid</th>
							<th style="text-align: center">Dues</th>				
						</tr>
					</thead>
					<tbody>
						<!--<?php $i=0; ?>-->
						@foreach($all as $al)
						<tr class="info">
							
							<td>{{ $al->C_ID }}</td>
							<td>{{ $al->C_name }}</td>
							<td>{{ $al->Date }}</td>
							<td>{{ $al->Description }}</td>
							<td>{{ $al->Paid }}</td>
							<td>{{ $al->Dues }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>

				<div class=" col-md-3">
					<p title="how much data holds in single page" style="color: blue">This Page Holds {{ $all->count() }} Customer Info's.</p>
				</div>
			</div>
		</div>
		{{$all->links()}}
@endsection

