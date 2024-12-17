<!DOCTYPE html>
<html>
<head>
<title>Chessboard</title>
<style>
table { border-collapse: collapse; }
td { width: 50px; height: 50px; text-align: center; }
.black { background-color: black; color: white; }
.white { background-color: white; }
</style>
</head>
<body>
<h1>Chessboard</h1>
<table border="1">
@for ($i = 0; $i < $rows; $i++)
<tr>
@for ($j = 0; $j < $cols; $j++)
@php
$isBlack = ($i + $j) % 2 === 0;
@endphp
<td class="{{ $isBlack ? 'black' : 'white' }}"></td>
@endfor
</tr>
@endfor
</table>
</body>
</html>