<!DOCTYPE html>
<html>
<head>
<title>API Simulation</title>
</head>
<body>
<h1>API Results:</h1>
@if ($data['status'] === 'success')
<ul>
@foreach ($data['results'] as $result)
<li>{{ $result['name'] }}: {{ $result['score'] }}</li>
@endforeach
</ul>
@else
<p>Failed to fetch data.</p>
@endif
</body>
</html>