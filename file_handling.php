<?php
// echo "File Handling in PHP<br>";
// //read / write file on the server
// $file_path = './fruits.txt';
// if(file_exists($file_path)) {
//     //echo readFile($file_path);//31 - number of bytes of the file
//     $file_handle = fopen($file_path, 'r');        
//     $file_content = fread($file_handle, 
//                         filesize($file_path));
//     fclose($file_handle);
//     echo $file_content;
// } else {
//     //not exist
//     $file_handle = fopen($file_path, 'w');//open for write
//     $file_content = 'banana'.PHP_EOL.'mango'.PHP_EOL.'grape';
//     fwrite($file_handle, $file_content);
//     fclose($file_handle);
// }
?>

<?php
echo "<h1>Fifle Handling in PHP</h1>";
$file_path = "./fruit.txt";
if (file_exists(($file_path))) {
    // echo readFile($file_path);
    $file_handle = fopen($file_path, "r");
    $file_content = fread($file_handle, filesize($file_path));
    fclose(($file_handle));
    echo $file_content;
} else {
    // echo "Let's check whether file is correct!";
    $file_handle = fopen($file_path, "w");
    $file_content = "A" . PHP_EOL . "B" . PHP_EOL . "C" . PHP_EOL . "D" . PHP_EOL;
    fwrite($file_handle, $file_content, strlen($file_content));
    fclose($file_handle);
}
