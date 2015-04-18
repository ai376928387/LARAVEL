@extends('layout.main')

@section('content')
<div class="row">
	 <div class="col-md-4"></div>
	 <div class="col-md-4">
	<!--<pre>{{ print_r($errors) }}</pre>-->
	<form action="{{ URL::route('account-create-post') }}" method="post">

		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" class="form-control" id="email" placeholder="Enter email" name="email"{{ (Input::old('email'))?'value="'.e(Input::old('email')).'"':'' }} >
			@if($errors ->has('email'))
			{{ $errors->first('email') }}
			@endif
		</div>
		<div class="form-group">
			<label for="username">username:</label>
			<input type="text" class="form-control" name="username" {{ (Input::old('username'))?'value="'.e(Input::old('username')).'"':'' }} >
			@if($errors ->has('username'))
			{{ $errors->first('username') }}
			@endif
		</div>
		<div class="form-group">
			<label for="password">Password:</label>
			<input type="password" class="form-control" name="password"> 
			@if($errors ->has('password'))
			{{ $errors->first('password') }}
			@endif
		</div>
		<div class="form-group">
			<label for="password_again">assword again:</label>
			<input class="form-control"  type="password" name="password_again">
			@if($errors ->has('password_again'))
			{{ $errors->first('password_again') }}
			@endif 
		</div>
		<button type="submit" class="btn btn-default">Create Account</button>
		{{ Form::token() }}
	</form>
	</div>
	<div class="col-md-4"></div>
</div>
@stop
