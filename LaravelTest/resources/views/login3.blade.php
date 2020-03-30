@extends('layouts.appmaster1') @section('title', 'Login Page')

@section('content')
<form action="doLogin3" method="POST">
	<input type="hidden" name="_token" value="<?php echo csrf_token()?>" />
	<h2>Please Login</h2>
	<table>
		<tr>
			<td>User Name:</td>
			<td><input type="text" name="username" maxlength="10" />{{
				$errors->first('username') }}</td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password" maxlength="10" />{{
				$errors->first('password') }}</td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" value="Login" />
			</td>
		</tr>
	</table>
</form>

@if($errors->count() != 0)
	<h5>List of Errors!</h5>
	@foreach($errors->all() as $message) 
		{{ $message }}<br/>
	@endforeach 
@endif 
@endsection
