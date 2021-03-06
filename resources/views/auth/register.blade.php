@extends('layout.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
	<div class="col-md-6">
	<div class="card">
		<header class="card-header">
			<a href="/login" class="float-right btn btn-outline-primary mt-1">Log in</a>
			<h4 class="card-title mt-2">Sign up</h4>
		</header>
		<article class="card-body">
		<form method="POST" action="{{ route('register') }}">
				@csrf
				<div class="form-row">
					<div class="col form-group">
							<label>First name </label>   
		  				<input type="text" class="form-control" name="first_name" required>
					</div>
					<div class="col form-group">
							<label>Last name</label>
		  				<input type="text" class="form-control" name="last_name" required>
					</div>
				</div>
				<div class="form-group">
					<label>Registration Number</label>
					<input type="text" class="form-control" name="reg_number" required>
                </div>
                <div class="form-group">
					<label>Email Address</label>
					<input type="email" class="form-control" name="email" required value="{{ old('email') }}" autocomplete="email">
				</div>
				<div class="form-group">
					<label>Phone Number</label>
					<input type="text" class="form-control" name="phone_number" required>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
		  				<label>Resident/Non-resident</label>
		  				<select id="resident" class="form-control" name="residents">
		    				<option value="" selected disabled> Choose...</option>
		      				<option value="1">Resident</option>
		      				<option value="2">Non-Resident</option>
		  				</select>
					</div>
					<div class="form-group col-md-6">
		  			<label>Residence</label>
		  			<select id="places" class="form-control" name="residence">
		    			<option selected disabled> Choose...</option>
		  			</select>
					</div>
				</div>
				<div class="form-group">
					<label>Create password</label>
	    		<input class="form-control" type="password" name="password" required>
				</div>
				<div class="form-group">
					<label>Confirm password</label>
	    		 <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
				</div> 
    			<div class="form-group">
        			<button type="submit" class="btn btn-primary btn-block"> {{ __('Register')}}</button>
    			</div>                                               
			</form>
		</article>
		<div class="border-top card-body text-center">Have an account? <a href="/login">Log In</a></div>
	</div>
	</div>
</div>
</div>

<script>

	$('#resident').change(function(e) {
		var value = e.target.value
		$.ajax({
			url: 'http://127.0.0.1:8000/place/' + value,
			method: 'GET',
			contentType: 'appplication/json',
			success: function(data) {
			
			var html = "<option selected disabled> Choose...</option> ";

			for (var i=0; i < data.length; i++) {
				var myHtml =  "<option value='" + data[i]['id'] + "'>" + data[i]['place'] + "</option> ";
				html += myHtml;
			}

			$('#places').html(html);

			},
			error: function (error) {
				console.log(error)
			}
		})
	})

</script>
@endsection