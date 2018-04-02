
<head>
	<title>YOUR DATA</title>
</head>
<body>
<center>
<form action="/data" method="post">
	<input type="hidden" name="_token"  value="{{csrf_token()}}">
	<input type="submit" name="display_data" value="SHOW">
	<table>
		<tr>
			<td>Customer ID</td>
			<td>Customer Name</td>
			<td>Date</td>
			<td>Description</td>
			<td>Paid</td>
			<td>Dues</td>
		</tr>
		<tr>
		@foreach($data as $data)
		<td>{{$data->C_ID}}</td><br>
		<td>{{$data->C_name}}</td>
		<td>{{$data->Date}}</td>
		<td>{{$data->Description}}</td>
		<td>{{$data->Paid}}</td>
		<td>{{$data->Dues}}</td>
		@endforeach
		</tr>

	</table>
</form>
</center>
</body>