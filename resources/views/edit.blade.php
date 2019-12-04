<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
   <h2>Employee Edit Form</h2>
   			<div class="container">
   				<div class="span3">
    <form method="post" action="{{ URL::to('update/'.$employee->id) }}">>
      {{  csrf_field() }}
    <label>Name</label>
    <input type="text" name="name" class="span3" value="{{$employee->name}}">
    <label>Email Address</label>
    <input type="email" name="email" class="span3" value="{{$employee->email}}">
    <label>salary</label>
    <input type="number" name="salary" class="span3" value="{{$employee->salary}}">
    <label>Birth_day</label>
    <input type="date" name="birth_date" class="span3" value="{{$employee->birth_date}}">
    <input type="submit" value="Update" class="btn btn-primary pull-right">
    <div class="clearfix"></div>
    </form>
</div>
   			</div>


		   <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		   <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>

</body>
</html>