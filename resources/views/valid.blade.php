<!DOCTYPE html>
<html lang="en">
<head>
  <title>Validation</title>
  <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

     <style>
           
           .error{
               color: red; 
           }

     </style>
</head>
<body>

	<div class="container">

          <div class="col-md-2 ">
          </div> 

               <div class="col-md-8" style="margin-right:" 20% >

				 	
		 			 <h2>Add Employee </h2>

          <form method="post" action="{{ URL::to('store') }}">
          	{{ csrf_field() }}
          	<div class="form-group">
                <label>Name</label>
          		<input type="text" value="{{ old('name') }}" class="form-control"  name="name">
                    <span class="error" >{{ $errors->first('name') }}</span>

                     <small>
                      <ul class="secondary">
                        <li>Your Name should only contain character & space </li>
                        
                      </ul>


                    </small>
          
          	</div>

          	<div class="form-group">
          		 <label>Email</label>
          		<input type="email" value="{{ old('email') }}" class="form-control"  name="email">
                   <span class="error" >{{ $errors->first('email') }}</span>

          	</div>

          	<div class="form-group">
          		 <label>Birth Date</label>
          		<input type="date" value="{{ old('birtd_date') }}" class="form-control"  name="birth_date">
                    <span class="error" >{{ $errors->first('birth_date') }}</span>

                 </div>

          	<div class="form-group">
          		 <label>salay</label>
          		<input type="number" value="{{ old('salary') }}" class="form-control"  name="salary">
                    <span class="error" >{{ $errors->first('salary') }}</span>

                 </div>


               <div class="form-group">
                     <label>Password</label>
                  <input type="password" value="{{ old('password') }}" class="form-control"  name="password">
                    <span class="error" >{{ $errors->first('password') }}</span>

                    <small>
                      <ul class="secondary">
                        <li>Your Password must be more than 8 characters long </li>
                        <li>Should contain at-least one uppercase</li>
                        <li>one Lowercase</li>
                        <li>one Numeric & one Special character</li>
                        
                      </ul>


                    </small>
              
              </div>


               <div class="form-group">
                     <label>Confirm Password</label>
                  <input type="password"  class="form-control"  name="confirm_password">
                    <span class="error" >{{ $errors->first('confirm_password') }}</span>
              
              </div>


          	<div class="form-group">
          		<input type="submit" class="btn btn-primary" value="submit">

          	</div>

          </form>

            </div>


		 </div>


</body>
</html>