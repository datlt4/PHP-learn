<?php
// echo "File upload in PHP";
// if (isset($_POST['submit'])) {
//     $permitted_extensions = ['png', 'jpg', 'jpeg', 'gif'];
//     $file_name = $_FILES['upload']['name'];
//     if (!empty($file_name)) {
//         //print_r($_FILES);
//         $file_size = $_FILES['upload']['size'];
//         $file_tmp_name = $_FILES['upload']['tmp_name'];
//         $generated_file_name = time() . '-' . $file_name;
//         $destination_path = "uploads/${generated_file_name}";
//         $file_extension = explode('.', $file_name);
//         $file_extension = strtolower(end($file_extension));
//         //echo "$file_name, $file_size, $file_extension, $destination_path";            
//         //validate file extension permitted 
//         if (in_array($file_extension, $permitted_extensions)) {
//             if ($file_size <= 1000000) {
//                 //ok, move from temp folder to /uploads
//                 //original file name and uploaded file name 
//                 //must be DIFFERENT !, why ?
//                 move_uploaded_file($file_tmp_name, $destination_path);
//                 $message = '<p style="color:green;">
//                     File is uploaded</p>';
//             } else {
//                 $message = '<p style="color:red;">
//                     File is too big</p>';
//             }
//         } else {
//             $message = '<p style="color:red;">
//                     Invalid file type</p>';
//         }
//     } else {
//         $message = '<p style="color:red;">
//             No file selected, please try again</p>';
//     }
// }
?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>File upload in PHP</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        Choose your image to upload
        <input type="file" name="upload">
        <input type="submit" value="submit" name="submit">
    </form>
    <?php echo $message ?? '' ?>
</body>

</html> -->

<?php
echo "file upload in PHP";
if (isset($_POST["submit_tag"])) {
    print_r($_FILES);
    $permitted_extensions = ['png', 'jpg', 'jpeg', 'gif'];
    $file_name = $_FILES['upload_tag']['name'];
    echo $$file_name;
    if (!empty($file_name)) {
        $file_size = $_FILES['upload_tag']['size'];
        $file_tmp_name = $_FILES['upload_tag']['tmp_name'];
        $file_extension = explode('.', $file_name);
        $file_extension = strtolower(array_pop($file_extension));
        $destination_path = "uploads/" . time() . "." . $file_extension;
        if (in_array($file_extension, $permitted_extensions)) {
            if ($file_size < 100000) {
                move_uploaded_file($file_tmp_name, $destination_path);
                $message = "<p style='color:green'>File is uploaded successfully</p>";
            } else
                $message = "<p style='color:red'>File is too big</p>";
        } else
            $message = "<p style='color:red'>Invalid file type</p>";
    } else {
        $message = "<p style='color:red'>No file selected, please try again</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Đặng | Upload file in PHP</title>
</head>

<body>
    <h1>File upload in PHP</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method=POST enctype="multipart/form-data">
        <p>Choose your image to upload</p>
        <input type="file" name="upload_tag">
        <input type="submit" value="upload" name="submit_tag">
        <?php echo $message ?? "" ?>
    </form>
</body>

</html>