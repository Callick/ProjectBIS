<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="HTML,XHTML,XML,CSS,JAVASCRIPT">
	<meta name="description" content="billing informations system">
	<meta name="author" content="callick">
	<!--<meta http-equiv="refresh" content="10">-->
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css/BISlogin.css')}}"><!--.css file ter linkup kora-->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<title>@yield('title')</title>
<div class="container">
<div class="page-header" data-position="fixed">
<h1 style="margin-top:20px;color:#7DB3FD" title="Billing Information System">BIS</h1>
</div>
<body>
<div class="container">
@yield('samenav')
@yield('samecontent')

<div class="embed-responsive">
<iframe class="embed-responsive-item" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fdaffodilvarsity.edu.bd%2F&tabs=timeline&width=300&height=80&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" style="border:none;overflow:hidden;" scrolling="no" allowTransparency="false" ></iframe>
</div><br></br>
<div class="panel panel-default">
<div class="panel-footer">
&copy;All Rights Reserved 2017
</div></div></div>
</body>
</html>