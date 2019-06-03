@extends('layout.app2')

@section('content')
<div class="container">
 	<div class="wrapper fadeInDown zero-raduis">
  	<div id="formContent">
			<!-- Icon -->
  		<div class="fadeIn first">
  	    <h2 class="my-5">Admin Sign In</h2>
  	  </div>

  	  <!-- Login Form -->
  	  <form method="POST" action="{{ route('admin.login.submit') }}">
        @csrf   
        <label class="fadeIn second zero-raduis">Username:</label>
        <input type="text" id="reg_number" class="fadeIn second zero-raduis " name="username" placeholder="Username">
				 @if ($errors->has('regno'))
          <span class="invalid-feedback" role="alert">
           <strong>{{ $errors->first('username') }}</strong>
          </span>
        @endif
        <div class="container" style="width:410px">
				<label class="fadeIn second zero-raduis">Password:</label>
  	    <input type="password" id="password" class="form-control fadeIn third zero-raduis" name="password" placeholder="password">
				 @if ($errors->has('password'))
          <span class="invalid-feedback" role="alert">
           <strong>{{ $errors->first('password') }}</strong>
      	 </span>
      	 @endif 
        </div>
        <div style="margin-top:20px;">
          <input type="submit" class="fadeIn fourth zero-raduis" value="login">
        </div>
          
        </form>
  	    

  	  </div>
  </div>
</div>
@endsection