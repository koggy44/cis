@extends('layout.app')

@section('content')
<div class="container">
 	<div class="wrapper fadeInDown zero-raduis">
  	<div id="formContent">
			<!-- Icon -->
  		<div class="fadeIn first">
  	    <h2 class="my-5">Sign In</h2>
  	  </div>

  	  <!-- Login Form -->
  	  <form method="POST" action="{{ route('login') }}">
        @csrf   
        <label class="fadeIn second zero-raduis">Registration No:</label>
        <input type="text" id="reg_number" class="fadeIn second zero-raduis " name="reg_number" placeholder="Registration No">
				 @if ($errors->has('regno'))
          <span class="invalid-feedback" role="alert">
           <strong>{{ $errors->first('regno') }}</strong>
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
          <input type="submit" class="fadeIn fourth zero-raduis" value="login">
          @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
         @endif
         <div>
  	      <h2>You don't have a account ?</h2>
  	      <a href="/register"><input type="button" class="fadeIn fourth zero-raduis pc" value="register"></a>
         </div>
        </form>
  	    

  	  </div>
  </div>
</div>
@endsection