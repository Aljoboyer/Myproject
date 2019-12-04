<!DOCTYPE html>
<html>
<head>
  <title>Documents</title>
</head>
<body>

          <h1>Documents</h1>
          <table class="table table-striped table-bordered">
            <thead>
               
               <tr>
                 
                 <th>Title</th>
                 <th>Body</th>

               </tr>
              
            </thead>
            <tbody>
             @foreach($clients as $c)
             <tr>
              
              <td>{{ $c->title }}</td>
              <td>{{ $c->body }}</td>
              

             </tr>
             @endforeach

            </tbody>
          </table>


</body>
</html>





	   