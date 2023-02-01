<?php
$y = 22;
//echo "This lesson is about function<br>";
//function is a "block of code", with name
function sayHello($name)
{ //function with "arguments"
    global $y;
    $y = 99;
    echo "y = $y<br>";
    $x = 123;
    echo "Hello $name" . "<br>";
}
function sayHello2($name)
{ //function with "arguments"
    // global $y;
    $y = 33;
    echo "y = $y<br>";
    $x = 123;
    echo "Hello $name" . "<br>";
}
// echo "x = $x";
// sayHello("Hoang"); //call function with "parameters"
// sayHello2("Hoa"); //call function with "parameters"
// echo "y = $y<br>";

function sum($a = 0, $b = 0)
{
    //default arguments' values
    return $a + $b;
}
echo sum(2, 3) . "<br>";
//assign a variable to a function
$multiply = function ($a, $b) {
    return $a * $b;
};
echo $multiply(3, 4) . "<br>";

// arrow function
$substract = fn ($a, $b) => $a - $b;
echo $substract(6, 2) . "<br>";
echo $substract(2, 6) . "<br>";
// some built-in function for array
$names = ['john', 'anna', 'hoang', 'tony'];
echo "number of items : " . count($names) . "<br>";
// seach inside array
var_dump(in_array('elon', $names));
echo "<br>";
// insert an item
array_push($names, 'elon', 'tom');
// insert to the beginning of the array
array_unshift($names, 'satoshi');
echo "number of items : " . count($names) . "<br>";
print_r($names);

// remote the last item
// for ($i = 0; $i < count($names); $i++) {
//     echo $i . ". " . (array_pop($names) ?? "-") . "<br>";
// }
// foreach ($names as $idx => $n)
//     echo $idx . ". " . (array_pop($names) ?? "-") . "<br>";
// array_pop($names) ?? "-";
// print_r($names);

// echo (array_pop($names) ?? "~~") . "<br>";

// remove the first item
// array_shift($names);
// print_r($names);

// how to remote an item
// unset($names[3]);
// print_r($names);
// echo "item index 3: " . ($names[3] ?? "~~");

//chunk an array
// $chunked_array = array_chunk($names, 3);
// print_r($chunked_array);

$array_one = [1, 3, 5];
$array_two = [2, 4, 6];
$merged_array = array_merge($array_one, $array_two);
// $array_two[0] = 111;
// print_r($merged_array);

// spread operator 
$array_three = [...$merged_array];//clone an array
// $merged_array[0] = 111;
// print_r($merged_array);
print_r($array_three);

//merge and clone
$array_four = [...$array_one, ...$array_two];
print_r($array_four);
//combine two arrays
$a = ['name', 'email', 'age'];
$b = ['Hoang', 'sunlight4d@gmail.com', 18];
$c = array_combine($a, $b);
print_r($c);
print_r(array_flip($c));
print_r(array_keys($c));
print_r(array_values($c));
//array from a range
$numbers = range(0, 10);
print_r($numbers);
//map an array to another array
//with the same size, but other values
// $squared_numbers = array_map(fn($each_number) => 
//     $each_number * $each_number
// , $numbers);
$squared_numbers = array_map(function ($each_number){return $each_number*$each_number;}, $numbers);
print_r($squared_numbers);
// filter an array
$filtered_numbers = array_filter($numbers, fn($each_number) => $each_number % 2 == 0);
print_r($filtered_numbers);
