@extends('layOut.master')
@section('title')
About The System
@endsection
@section('samenav')
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
<li><a href="#edit info" title="update customer informations" ><span class="glyphicon glyphicon-edit"></span> EDIT INFO </a></li>
<li><a href="{{url('/BIS_delete')}}" title="delete customer informations" ><span class="glyphicon glyphicon-minus-sign"></span> DELETE INFO </a></li>
</ul></li>
<li role="presentation"><a href="{{url('/search')}}" title="search customer details" ><span class="glyphicon glyphicon-search"></span> Search </a>
<li role="presentation"><a href="{{url('/profile')}}" title="contact us"><span class="glyphicon glyphicon-globe"></span>Info</a></li>
<li role="presentation"><a href="{{url('/About')}}" title="description about this system"><span class="glyphicon glyphicon-info-sign"></span> About </a></li>
<!--<li><a href="#logout" style="pointer-events: none; cursor: default; opacity: 0.5" title="LOGOUT">Logout</a></li>-->
</ul></div></div></div>
@endsection
@section('samecontent')
<div class="panel panel-primary">
    <h3><b>WHY IT NEEDS?</b></h3>
    <p><strong>This is high-time for choosing an effective system that can be able to reduce the complexity from our daily life. This system is able to help you to store your valuable customer's facts. </strong></p>
</div>
<div class="panel panel-primary">
    <h3><b>WHY YOU SHOULD TO USE?</b></h3>
    <p><strong>As a shop-owner, you have to transaction with your customers. And average peoples are using paper-pen for storing their customers informations which are related to transaction |(mainly the owe informations)|. </strong></p>
</div>
<div class="panel panel-primary">
    <h3><b>OUR GOALS</b></h3>
    <p><strong>We are really appreciate to effectively use this system. We want to reduce the complexity of sorting the owe informations. If the owe info's are lost away, it will be the great embarrassing moments between you and the customer's. We are always with you by implementing our services for your necessity. </strong></p>
</div>
@endsection