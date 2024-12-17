<!DOCTYPE html>
<html>
<head>
<title>Random Numbers</title>
</head>
<body>
<h1>Generated Random Numbers:</h1>
<ul>
@foreach ($numbers as $number)
<li>{{ $number }}</li>
@endforeach
</ul>
</body>
</html>