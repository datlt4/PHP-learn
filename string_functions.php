<?php
echo "String functions in PHP<br>";
$full_name = 'Nguyen Duc Hoang';
echo "length: " . strlen($full_name)."<br>";

// reverse a string
echo strrev($full_name)."<br>";

// conert to lowercase
echo strtolower($full_name)."<br>";
echo strtoupper($full_name)."<br>";

// find and replace
echo str_replace(' ', '-', $full_name)."<br>";

// 
if (str_starts_with(strtolower($full_name), 'nguyen')) {
    echo "His name starts with nguyen<br>";
}
if (str_ends_with(strtolower($full_name), 'hoang')) {
    echo "His name ends with hoang <br>";
}
echo "<h1>html string</h1>";

//how to ignore the html string ?
echo htmlspecialchars("<h1>html string</h1>")."<br>";

//echo "<script>alert('This is javascript code')</script>";
echo htmlspecialchars("<script>alert('This is javascript code')</script>")."<br>";

//htmlspecialchars used to get data in form
printf('<br>%s likes %s<br>', 'Hoang', 'Mercedes G63'); 
printf('pi = %f<br>', 3.14);
printf('<br>%s likes %s', htmlspecialchars("<h1>HOang</h1>"), 'Mercedes G63'); 
printf('<br>%s likes %s', "<h1>HOang</h1>", 'Mercedes G63'); 
