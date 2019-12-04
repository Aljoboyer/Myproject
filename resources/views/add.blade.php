<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
   <h2>Employee Registration Form</h2>
   			<div class="container">
   				<div class="span3">
    <form method="post" action="{{ URL::to('store') }}">
      {{  csrf_field() }}
    <label>Name</label>
    <input type="text" name="name" class="span3">
    <label>Email Address</label>
    <input type="email" name="email" class="span3">
    <label>salary</label>
    <input type="number" name="salary" class="span3">
    <label>Birth_day</label>
    <input type="date" name="birth_date" class="span3">
    <input type="submit" value="Sign up" class="btn btn-primary pull-right">
    <div class="clearfix"></div>
    </form>
</div>
   			</div>


		   <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		   <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>

</body>
</html>