<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <h2>List of Employees</h2>
    <div class = "container">
    	    <table class="table table-striped table-bordered">
    	<thead>
    		<th>NAME</th>
    		<th>EMAIL</th>
    		<th>SALARY</th>
    		<th>BIRTH DATE</th>
    		<th>Edit</th>
    		<th>Delete</th>
    	</thead>
    	<tbody>
    		@foreach($employees as $e)
            <tr>
            	<td>{{ $e-> name }}</td>
            	<td>{{ $e-> email }}</td>
            	<td>{{ $e-> salary }}</td>
            	<td>{{ $e-> birth_date }}</td>
            	<td><a href="{{ URL::to('edit/'.$e->id) }}">Edit</a></td>
            	<td><a href="{{ URL::to('delete/'.$e->id) }}">Delete</a></td>
            </tr>
    		@endforeach
    	</tbody>
    </table>

    </div>
</body>
</html>