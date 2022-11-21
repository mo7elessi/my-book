<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	@include('include.loginStyle')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<div class="login-page">

<form class="form"action="login" method="post">
@csrf
@if(Session::get('error'))
<div class="alert alert-danger">
{{Session::get('error')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>

@endif
<label>Name</label>
<input type="text" name="name" value="{{ old('name') }}"  placeholder="Enter Name" required>
@error('name')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
<label>Password</label>
<input type="password" name="password" placeholder="Enter Password" required>
@error('password')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
<button type="submit" class="btn btn-primary">Login</button>
</form>
</div>


</body>
</html>

<body>