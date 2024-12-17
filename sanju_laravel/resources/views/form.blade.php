<!DOCTYPE html>
<html>
<head>
<title>Form Example</title>
</head>
<body>
<h1>Enter Your Details</h1>
<form action="/submit-form" method="POST">
@csrf
<label for="name">Name:</label>
<input type="text" id="name" name="name">
<br>
<label for="age">Age:</label>
<input type="number" id="age" name="age">
<br>
<button type="submit">Submit</button>
</form>
@if ($errors->any())
<div>
<h3>Errors:</h3>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
</body>
</html>