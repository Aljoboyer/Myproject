<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>All Product</h2>
	<table border="5">
		<thead>
			<th>Product ID</th>
			<th>Product Name</th>
			<th>Price</th>
			<th>Category Name</th>
</thead>
		
		<tbody>
			@foreach($products as $p)
			<tr>
			   <td>{{ $p->id }}</td>
			   <td>{{ $p->pname }}</td>
			   <td>{{ $p->price }}</td>
			   <td>{{ $p->cname }}</td>	

			</tr>

			@endforeach

		</tbody>
	</table>
</body>
</html>