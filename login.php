

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Đặng Thị Huyền Trang, anh thích em</p>
    <?php
    echo "File xử lý login<br>";
    //echo "usename:  ".$_GET["username"]."<br>";
    //echo "password: ".$_GET["password"]."<br>";
    echo "usename:  ".$_POST["username"]."<br>";
    echo "password: ".$_POST["password"]."<br>";
    ?>
</body>

</html>