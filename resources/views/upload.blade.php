<!DOCTYPE html>
<html>
<head>
	<title>Excel File Upload</title>
</head>
<body>

		
		<h2>Excel File Upload Example</h2>
		<form method="post" action="{{ URL::to('ImportFile') }}"  enctype="multipart/from-data">
				{{ csrf_field() }}

		<h3> <i class="fa fa-file-excel-o"></i> Import Excel </h3>



			<input type="file" name="file">




			<input style="margin-top: 20px" class="btn btn-primary" type="submit" value="submit">
		

		</form>
			
		
            

</body>
</html>