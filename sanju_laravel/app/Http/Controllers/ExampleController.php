<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function showMessage()
    {
      $message = "Hello from the Controller";
      return view ('message', ['message' => $message]);  
    }

public function showView()   
{
    $data = [
        'title' => 'Welcome to Laravel',
        'description' => 'This is a demo without a database.',
    ];
    return view('example',$data);
} 

public function listItems()
{
    $items = [
        ['id' => 1, 'dress' => 'Item 1', 'dress_price' => 100],
        ['id' => 2, 'shoe' => 'Item 2', 'shoe_price' => 200],
        ['id' => 3, 'watch' => 'Item 3', 'watch_price' => 300],
    ];

    return view('items', ['items' => $items]);
}

public function handleForm(Request $requst)
{
    $name = $requst->input('name');
    return "Form submitted! Hello, $name!";
}

//Using If-Else in Controller
public function checkCondition()
{
$value = 8; // Static value for demonstration
if ($value > 10) {
$message = "The value is greater than 10.";
} 
else {
$message = "The value is 10 or less.";
}
return view('condition', ['message' => $message]);
}

//Using For Loop in Controller
public function generateNumbers()
{
$numbers = [];
for ($i = 1; $i <= 10; $i++) {
$numbers[] = $i;
}
return view('numbers', ['numbers' => $numbers]);
}

//Using a Switch in Controller
public function chooseColor($color)
{
switch ($color) {
case 'red':
$message = "You chose Red.";
break;
case 'blue':
$message = "You chose Blue.";
break;
case 'green':
$message = "You chose Green.";
break;
default:
$message = "Invalid color.";
}
return view('color', ['message' => $message]);
}


//Random Number Generator
public function randomNumbers()
{
$numbers = [];
for ($i = 0; $i < 5; $i++) {
$numbers[] = rand(1, 100); // Generate random numbers between 1 and 100
}
return view('random', ['numbers' => $numbers]);
}


//Simulate Conditional Rendering
public function checkAccess($age)
{
if ($age >= 18) {
return view('adult', ['age' => $age]);
} else {
return view('minor', ['age' => $age]);
}
}


//Simulate an API Call
public function simulateApi()
{
$data = [
'status' => 'success',
'results' => [
['name' => 'Alice', 'score' => 85],
['name' => 'Bob', 'score' => 92],
['name' => 'Charlie', 'score' => 78]
]
];
return view('api_simulation', ['data' => $data]);
}

//Generate a Chessboard Grid
public function chessboard()
{
$rows = 8;
$cols = 8;
return view('chessboard', ['rows' => $rows, 'cols' => $cols]);
}

//Dynamic Form with Validation
public function showForm()
{
return view('form');
}
public function validateForm(Request $request)
{
$validated = $request->validate([
'name' => 'required|max:50',
'age' => 'required|integer|min:1|max:100'
]);
return view('form_result', ['data' => $validated]);
}




}

