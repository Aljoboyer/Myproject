<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Timeline</title>
</head>
<body>
	<h2>Timeline Page</h2>
	@if(Session::get('userrole')=='teacher')
		<ul>
			<li><a href="">Give CT MARKS</a></li>
			<li><a href="">Enroll Student</a></li>
		</ul>
	@elseif(Session::get('userrole')=='student')
		<ul>
			<li><a href="">View CT MARKS</a></li>
			<li><a href="">View Enrolled Subjects</a></li>
		</ul>
	@elseif(Session::get('userrole')=='admin')
		<ul>
			<li><a href="">View all Teacher data</a></li>
			<li><a href="">View all Sudent data</a></li>
		</ul>
	@endif
</body>
</html>