<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Students</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>
<body>
  <div class="container">
    <h2>For all students</h2>
  <table class="table table-striped table-bordered" id="studentstbl">
    <thead>
      <th>Name</th>
      <th>Email</th>
      <th>Birth date</th>
      <th>Address</th>
      <th>Edit</th>
      <th>Delete</th>
    </thead>
    <tbody>
      @foreach($students as $student)
      <tr>
        <td>{{$student->name}}</td>
          <td>{{$student->email}}</td>
          <td>{{$student->birth_date}}</td>
          <td>{{$student->address}}</td>
          <td><button>edit</button></td>
          <td><button>delete</button></td>
        </tr>
      @endforeach
      </tbody>
      <tfoot>
        <th>Name</th>
          <th>Email</th>
          <th>Birth date</th>
          <th>Address</th>
          <th>Edit</th>
          <th>Delete</th>
      </tfoot>
    </table>
    </div>
      <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function(){
        $('#studentstbl tfoot th').each( function () {
                var title = $(this).text();
                if(title !='Edit' && title !='Delete'){
               $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
           }
                 } );
           var table= $('#studentstbl').DataTable({
          "columnDefs": [ {
                    "targets": [4,5],
                    "orderable": false
                } ],
                 
        });
            table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change clear', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
            } );
         } );
    });
    </script>
  </body>
</html>