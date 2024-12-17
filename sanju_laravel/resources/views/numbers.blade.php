<!DOCTYPE html>
<html>
<head>
<title>Numbers Example</title>
</head>
<body>
<h1>Generated Numbers</h1>
<ul>
@foreach ($numbers as $number)
<li>{{ $number }}</li>
@endforeach
</ul>
</body>
</html>
